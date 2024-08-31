<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class UserAuthController extends Controller
{
    public function index()
    {
        return view('UserAuth.index');
    }

    public function login(Request $request)
    {

        $validation = $this->checklogin($request);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        } else {
            $username = $request->input('username');
            $password = $request->input('password');
        }
        $checklogin = UserAuth::login($username, $password);
        $count = count($checklogin);
        if ($count > 0) {
            if($checklogin[0]->role !='admin'){
                Session::put('clientUsername', $checklogin[0]->username);
            Session::put('role', $checklogin[0]->role);
            }
            Session::put('username', $checklogin[0]->username);
            Session::put('role', $checklogin[0]->role);
            return redirect()->Route('toy.index');
        } else return redirect()->back()->withErrors(['msg'=>'Wrong username or password'])->withInput();

    }
    public function loginClientIndex()
    {
        return view('UserAuth.index');
    }
    public function loginClient(Request $request)
    {
        $validation = $this->checklogin($request);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        } else {
            $username = $request->input('username');
            $password = $request->input('password');
        }

        $checklogin = UserAuth::loginUser($username, $password);

        if ($checklogin.length() > 0) {
            Session::put('clientUsername', $request->input('username'));
            return redirect()->Route('user.view');
        } else return redirect()->back()->withErrors(['msg'=>'Wrong username or password'])->withInput();

    }
    public function myAccount($username)
    {
        $user = UserAuth::GetUserByUsername($username);
        // dd($user);
        return view('UserView.myAccount', ['user' => $user]);
    }
    public function logout(){
        if (Session::has('username')) {
            Session::forget('username');
        }
        return redirect()->route('admin.login');
    }

    private function checklogin($rq)
    {
        return validator::make(
            $rq->all(),
            [
                'username' => ['required'],
                'password' => ['required', 'min:8'],
            ],
            [
                'username.required' => 'email cannot be empty!!!',
                'password.required' => 'password cannot be empty',
                'password.min' => 'password must have at least 8 character'
            ]
        );
    }

}
