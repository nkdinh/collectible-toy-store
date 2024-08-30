<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use App\Http\Controllers\UserAuthController;

class UserAuth
{
    public static function GetAllAccount()
    {
        $users = DB::table('users')->select('users.*')->get();
        return $users;
    }
    public static function GetUserByID($id)
    {
        return DB::table('users')->where('Cid', '=', $id)->get();
    }

//    public static function loginCustomer($username, $password)
//    {
//        return DB::table('users')->where(['username' => $username, 'password' => $password])->count();
//
//    }
    public static function login($username, $password)
    {
        $sql = "SELECT * FROM admin WHERE username='" . $username . "' AND password='" . sha1($password) . "'";
        return count(DB::select($sql));
//        return DB::table('admin')->where(['username' => $username, 'password' => md5($password)])->count();
    }
    public static function store($users)
    {
        DB::table('users')->insert([
            'customer_name' => $users['fullName'],
            'email' => $users['email'],
            'address' => $users['address'],
            'gender' => $users['gender'],
            'username' => $users['username'],
            'password' => $users['password'],
        ]);
    }

    public static function update($id, $users)
    {
        DB::table('users')->where('Cid', '=', $id)->update([
            'customer_name' => $users['fullName'],
            'email' => $users['email'],
            'address' => $users['address'],
            'gender' => $users['gender'],
        ]);
    }
    public static function delete($id)
    {
        DB::table('users')->where('Cid', '=', $id)->delete();
    }
}
