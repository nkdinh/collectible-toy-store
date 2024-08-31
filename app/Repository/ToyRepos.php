<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ToyRepos
{
    public static function GetAllToys()
    {
        $sql = "select * from products ";
    return   DB::select($sql);
    }

    public static function GetCategories()
    {
        $sql = "select * from product_categories ";
        return DB::select($sql);
    }

    public static function FindProductByName($product_name){
        $search = '%'.$product_name.'%';
        $sql = "select * from products where name like ?";
        return DB::select($sql,[$search]);
    }

    public static function GetCategoryById($id)
    {
        $sql = "select * from product_categories where id=?";
        return DB::select($sql,[$id]);

    }

    public static function GetProductById($id)
    {
        $sql = "select * from products where p_id = ?";
         return DB::select($sql, [$id]);
    }

    public static function Store($product)
    {
        $sql = "insert into products (p_id,name,description,price,img,product_category_id) values (?,?,?,?,?,?)";
        DB::insert($sql, [
            $product->id,
            $product->name,
            $product->description,
            $product->price,
            $product->img,
            $product->product_category_id,
        ]);
    }

    public static function storeCategory($product_category)
    {
        $sql = " insert into product_categories (id,title) values (?,?) ";
        DB::insert($sql,[$product_category->id,$product_category->product_category]);
    }

    public static function Update($id, $product)
    {
        $sql = "update products set name=?,price=?,description=?,img=?,product_category_id=? where p_id=?";
        DB::update($sql,[
            $product->name,
            $product->price,
            $product->description,
            $product->img,
            $product->product_category_id,
            $id,
        ]);
    }
    public static function UpdateCategory($product_categories, $id)
    {
        // Convert the array to a string
        $product_categories_str = implode(',', $product_categories);

        $sql = "update product_categories set title=? where id=?";
        DB::update($sql,[$product_categories_str,$id]);
    }

    public static function Delete($id)
    {
        DB::table('products')->where('p_id', '=', $id)->delete();
    }
    public static function categoryDelete($id)
    {
        DB::table('product_categories')->where('id', '=', $id)->delete();
    }

    public static function DeleteCategory($id)
    {
        DB::table('product_categories')->where('id', '=', $id)->delete();
    }
    public static function HasProductsInCategory($id)
    {
        $sql = "select * from products where product_category_id = ?";
        return DB::select($sql,[$id]);
    }

//    public static function SearchByName($name){
//        DB::table('puppy')->where('name','like',$name)->get();
//    }

}
