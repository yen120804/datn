<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category_products;

class ProductsController extends Controller
{
    public function products()
    {
        $allProducts = Products::with('category')->orderBy('name', 'asc')->paginate(15);
        $allCategories = Category_products::orderBy('name', 'asc')->get();
        return view('products', compact('allProducts', 'allCategories'));
    }

    public function getProductsByCategory($category_id)
    {
        $allProducts = Products::where('category_id', $category_id)->with('category')->orderBy('name', 'asc')->paginate(9);
        $allCategories = Category_products::orderBy('name', 'asc')->get();
        $currentCategory = Category_products::find($category_id);
        $categoryName = $currentCategory ? $currentCategory->name : 'Danh mục không tồn tại';
        return view('products', compact('allProducts', 'allCategories', 'currentCategory', 'categoryName'));
    }

    // public function detail($id)
    // {
    //     $item = Products::with('category')->find($id);
    //     $relatedProducts = Products::where('category_id', $item->category_id)->where('id', '!=', $id)->limit(4)->get();
    //     return view('detail', compact('item', 'relatedProducts'));
    // }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $products = Products::where('name', 'LIKE', "%$query%")->paginate(6);
    //     return view('search', compact('products', 'query'));
    // }
    //     public function cart()
    // {
    //     return view('cart');
    // }


}