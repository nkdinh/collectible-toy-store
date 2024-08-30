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
        if ($checklogin > 0) {
            Session::put('username', $request->input('username'));
            return redirect()->Route('toy.index');
        } else return redirect()->back()->withErrors(['msg'=>'Wrong username or password'])->withInput();

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
