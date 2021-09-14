<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MainCategory;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {


        $categories =  MainCategory::limit(6)->get();
        $partner =  Partner::get();

        $settings = Setting::with('fields')->whereIn('name_en', [
            // 'all-category-page',
            'footer section',
            'Home Page'
        ])->get();
        
        return view('website.home', ['settings' => $settings, 'categories' => $categories, 'partners' => $partner]);
    }


    public function category()
    {
        $settings = Setting::with('fields')->whereIn('name_en', [
            'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        $categories =  MainCategory::all();
        return view('website.all-category', ['settings' => $settings, 'categories' => $categories]);
    }




    public function single_category($category = null)
    {

        $settings = Setting::with('fields')->whereIn('name_en', [
            // 'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        $category = str_replace("-", " ", $category);

        $category =  MainCategory::with('product')->where('name', $category)->orWhere('name', $category)->firstOrFail();
        return view('website.category_product', ['category' => $category, 'products' => $category->product , 'settings'=>$settings]);
    }

    public function single_product($product = null, $category = null)
    {
        // $category = str_replace("-", " ", $category);

        $settings = Setting::with('fields')->whereIn('name_en', [
            // 'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        $product =  Product::with('faq')->with('media')->where('id', $product)->firstOrFail();
        $category = $product->category;
        return view('website.single_product', ['category' => $category, 'product' => $product  , 'settings'=>$settings]);
    }

    public function contact(Request $request)
    {
        $settings = Setting::with('fields')->whereIn('name_en', [
            'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        return view('website.contact', ['settings' => $settings]);
    }

    public function contact_post(Request $request)
    {
        


       Contact::create($request->all());

       

        return redirect( route('website.contact'))->with(['success'=>"WE RECIEVED YOUR MESSAGE AND WE CONTACT WITH YOU SHORTLY"]);
    }

    public function aboutUs()
    {
   
        

        $settings = Setting::with('fields')->whereIn('name_en', [
            // 'all-category-page',
            'all-about-page',
            'footer section',
            'Home Page'
        ])->get();
        
        return view('website.about-us' , ['settings' => $settings]);
    }

}
