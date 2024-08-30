<?php

namespace App\Http\Controllers;

use App\Repository\ToyRepos;
use App\Repository\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        $products = User::GetAllProducts();
        $product_categories = ToyRepos::GetCategories();
        return view('Userview.index', [
            'products' => $products,
            'product_categories' => $product_categories
        ]);

    }

    public function FilterProduct($id)
    {
        $product_categories = ToyRepos::GetCategories();
        $products = User::GetProductByCategory($id);
        return view('Userview.FilterProduct', [
            'products' => $products,
            'product_categories' => $product_categories
        ]);
    }

    public function GetProductById($id)
    {
        $product_categories = ToyRepos::GetCategories();
        $products = User::GetProductById($id);
        return view('UserView.Detail',
            [
                'products' => $products,
                'product_categories' => $product_categories
            ]);
    }

    public function ClientSearchPet()
    {
        $product_categories = ToyRepos::GetCategories();
        $product_name = $_GET['product_name'];
        $result = ToyRepos::FindProductByName($product_name);
        return view('UserView.index', [
            'products' => $result,
            'product_categories' => $product_categories
        ]);
    }
    public function AboutUs(){
        return view('UserView.aboutus');
    }
    public function Tip(){
        return view('UserView.tips');
    }
    public function gallery(){
        $products = ToyRepos::GetAllToys();
        return view('UserView.gallery', [
            'products' => $products
        ]);
    }
}
