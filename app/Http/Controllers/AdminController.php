<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    public function myAccount($username)
    {
        $admin = AdminRepos::GetAdminByUsername($username);
        return view('toywebsite.accountAdmin.myAccount', [
            'admin' => $admin[0],
        ]);
    }

    public function adminAccount()
    {
        $admin = AdminRepos::GetAllAccount();
        return view('toywebsite.accountAdmin.adminAccount', [
            'admin' => $admin,
        ]);
    }

    public function VerifyPassword(Request $rq)
    {
        $pwd = AdminRepos::GetAllAccount();
        if ($rq->pwd == sha1($pwd)) {
            return redirect()->route('admin.edit');
        }
    }

    public function editAdmin($username)
    {
        $admin = AdminRepos::GetAdminByUsername($username);
        return view('toywebsite.accountAdmin.updateAdmin', [
            'admin' => $admin[0],
        ]);
    }

    public function updateAdmin(Request $request, $username)
    {
        $this->validation($request)->validate();
        $admin = [
//            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
//            'username' => $request->input('username'),
            'password' => $request->input('password'),
//            'username' => $request->input('username'),

        ];
        AdminRepos::Update($username, $admin);
        return redirect()->route('toy.index');
    }

    private function validation($request)
    {
        return Validator::make($request->all(), [
            'email' => ['required','email', 'ends_with:@gmail.com'],
            'phone' => ['required','digits_between:10,11','starts_with:0'],
            'password' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    $username = $request->input('username');
                    $admin = AdminRepos::GetAllAccount();
                    $count = 0;
                    for ($i = 0, $iMax = count($admin); $i < $iMax; $i++) {
                        if ($username == $admin[$i]->username) {
                            $value = sha1($request->input('password'));

                            if ($value != $admin[$i]->password) {

                                $count += 1;
                                break;
                            }
                        }
                    }
                    if ($count != 0) {
                        $fail('Stay away from my computer :>');
                    }
                }
            ]
        ]);
    }
}
