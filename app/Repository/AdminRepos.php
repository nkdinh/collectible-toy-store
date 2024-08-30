<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function GetAllAccount(){
        $sql = "select * from admin";
        $admin = DB::select($sql);
        return $admin;
    }

    public static function GetAdminByUsername($username)
    {
         return DB::table('admin')->where('username', '=', $username)->get();

    }
    public static function Update($username, $admin)
    {
        DB::table('admin')->where('username', '=', $username)->update([
//            'name' => $admin['name'],
            'email' => $admin['email'],
            'phone' => $admin['phone'],
            'gender' => $admin['gender'],
//            'username' => $admin['username'],
        ]);
    }
}
