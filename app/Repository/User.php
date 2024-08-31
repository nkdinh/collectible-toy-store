<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class User
{
    public static function GetAllProducts()
    {
        $sql = "select * from products join product_categories on products.product_category_id =  product_categories.id  ";
        return DB::select($sql);
    }

    public static function GetProductById($id)
    {
        error_log($id);
        $sql = "select * from products join product_categories on products.product_category_id = product_categories.id where products.p_id = ?";
        return DB::select($sql, [$id]);
    }
    public static function GetProductByCategory($id)
    {
        $sql = "select * from products join product_categories on products.product_category_id = product_categories.id where product_categories.id = ?";
        return DB::select($sql, [$id]);
    }
    public static function GetImagePet(){
        $image = "select * from puppy";
        return DB::select($image);
    }
}
