<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Partner;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $categories=  MainCategory::limit(6)->get();
        $partner=  Partner::get();
       return view('website.home',['categories'=>$categories,'partners'=>$partner]);
    }


    public function category ()
    {
        $categories=  MainCategory::all();
       return view('website.all-category',['categories'=>$categories]);
    }

    
    public function category_product ()
    {
        $categories=  MainCategory::all();
       return view('website.category_product',['categories'=>$categories]);
    }

    public function single_category ($category = null)
    {
        $category = str_replace("-", " ", $category);

        $category=  MainCategory::with('product')->where('name',$category)->orWhere('name', $category)->firstOrFail();
       return view('website.category_product',['category'=>$category , 'products'=>$category->product]);
    }
}
