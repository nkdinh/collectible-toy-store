<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminRepos
{
    public static function GetAllAccount(){
        $sql = "select * from admin";
        $admin = DB::select($sql);
        return $admin;
    }

    public static function store($users)
    {
        DB::table('admin')->insert([
            'name' => $users['name'],
            'email' => $users['email'],
            'phone' => $users['phone'],
            'gender' => $users['gender'],
            'username' => $users['username'],
            'password' => sha1($users['password']),  // Hash the password using SHA-1
        ]);
    }
    public static function GetAdminByUsername($username)
    {
        $sql = "select * from users where username = ?";
        $admin = DB::select($sql, [$username]);
        return $admin;

    }
    public static function Update($username, $admin)
    {
        DB::table('users')->where('username', '=', $username)->update([
//            'name' => $admin['name'],
            'email' => $admin['email'],
            'gender' => $admin['gender'],
//            'username' => $admin['username'],
        ]);
    }
}
