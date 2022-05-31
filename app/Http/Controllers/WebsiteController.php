<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Carrer;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Department;
use App\Models\MainCategory;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    public function home()
    {

        
        $slider = Slider::all();
        $departments = Department::where('status',true)->get();
        $services = Service::where('status',true)->get();
        $categories =  MainCategory::limit(6)->get();
        $partner =  Partner::get();
        $blogs = Blog::with('comments')->orderBy('created_at','desc')->limit(10)->get();


        $settings = Setting::with('fields')->whereIn('name_en', [

            'service-details',
            'footer section',
            'Home Page',
            'counter-section',
            'about-section',
            'section5-homepage-headerdata',
            'footer section',
            'Home Page',
            'section7-homepage-padges'
        ])->get();

        return view('website.home', ['blogs'=>$blogs ,'settings' => $settings, 'categories' => $categories, 'partners' => $partner ,'slider'=>$slider,'services'=>$services,'departments'=>$departments]);
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
            'all-contact-page',
            'Home Page'
        ])->get();

        return view('website.contact-us', ['settings' => $settings]);
    }


    public function services(Request $request)
    {
        $services = Service::where('status',true)->get();

        $settings = Setting::with('fields')->whereIn('name_en', [
            'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        return view('website.services', ['settings' => $settings , 'services'=>$services]);
    }

    public function service(Request $request, $id)
    {
        $services = Service::where('status',true)->select('name_'.app()->getLocale(),'id')->get();

        $service = Service::where('status',true)->where('id',$id)->firstOrFail();

        $settings = Setting::with('fields')->whereIn('name_en', [
            'service-details',
            'footer section',
            'Home Page',
            'counter-section',
            'about-section',
            '',
        ])->get();

        return view('website.service-details', ['settings' => $settings , 'services'=>$services,'service'=>$service]);
    }

    public function categoryBlogs(Request $request , $id)
    {
        $blogs = Blog::where(['status'=>true, 'category_id'=>$id])->get();
        $settings = Setting::with('fields')->whereIn('name_en', [
            'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        return view('website.blogs', ['settings' => $settings,'blogs'=>$blogs]);
    }

    public function searchBlogs(Request $request )
    {
        $blogs = Blog::where('name_ar', 'LIKE', '%' . $request->name . '%'
        )->orWhere('name_en', 'LIKE', '%' . $request->name . '%')->get();
        $settings = Setting::with('fields')->whereIn('name_en', [
            'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        return view('website.blogs', ['settings' => $settings,'blogs'=>$blogs]);
    }

    public function blogs(Request $request)
    {
        $blogs = Blog::with('comments')->where('status',true)->get();
        $settings = Setting::with('fields')->whereIn('name_en', [
            'all-category-page',
            'footer section',
            'Home Page'
        ])->get();

        return view('website.blogs', ['settings' => $settings,'blogs'=>$blogs]);
    }


    public function blog(Request $request, $id)
    {
        $categories = Category::where('status',true)->limit(10)->get();

        $recent_blogs = Blog::with('comments')->orderBy('created_at','desc')->limit(10)->get();

        $blogs = Blog::where('status',true)->select('name_'.app()->getLocale(),'id')->get();

        $blog = Blog::where('status',true)->where('id',$id)->firstOrFail();

        $settings = Setting::with('fields')->whereIn('name_en', [
            'blog-details',
            'footer section',
            'Home Page',
            'counter-section',
            'about-section',
            '',
        ])->get();

        return view('website.blog-details', ['recent_blogs'=>$recent_blogs, 'categories'=> $categories, 'settings' => $settings , 'blogs'=>$blogs,'blog'=>$blog]);
    }


    public function contact_post(Request $request)
    {



       Contact::create($request->all());

       session()->flash('success', 'WE RECIEVED YOUR MESSAGE AND WE CONTACT WITH YOU SHORTLY');

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



    public function careers(Request $request , $title = null) {

        $settings = Setting::with('fields')->whereIn('name_en', [
            // 'all-category-page',
            'all-about-page',
            'footer section',
            'Home Page'
        ])->get();


        if ($title) {


            $settings = Setting::with('fields')->whereIn('name_en', [
                // 'all-category-page',
                'all-about-page',
                'footer section',
                'Home Page'
            ])->get();

            $career = Carrer::where('title' , $title)->firstOrFail();

            return view('website.application', ['career'=>$career,'settings'=>$settings]);
        }

        $careers = Carrer::where('status' , true)->get();

        return view('website.career' , ['settings' => $settings , 'careers'=>$careers]);


    }


    public function careers_apply(Request $request )
    {

        $career = Carrer::findOrFail($request->carrer);


        $inputs = $request->all();
        if( $cv =$request->file('cv'))
        {

           $inputs['cv'] = uploaderOne($cv , '/appliers_cv');
        }
        $career_appl = $career->appliers()->create($inputs);


        alert()->success('Your Application Form Has  Been Sent ! We W\'ll Call You Shortly  ')->autoclose(10000);
        return redirect()->back();
    }


    // public function application(Request $request , $title = null) {

    //     $settings = Setting::with('fields')->whereIn('name_en', [
    //         // 'all-category-page',
    //         'all-about-page',
    //         'footer section',
    //         'Home Page'
    //     ])->get();

    //     $carrers = Carrer::where('status' , true)->get();

    //     return view('website.carrers' , ['settings' => $settings , 'carrers'=>$carrers]);


    // }

}
