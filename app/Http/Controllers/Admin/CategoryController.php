<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['items' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.category.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $validator = Validator::make($request->all() , [
        // $this->validate(
        //     $request,
        //     [
        //         'name_ar' => 'required|string|min:1|max:45|unique:categories,name_ar',
        //         'name_en' => 'required|string|min:1|max:45|unique:categories,name_en',

        //     ]
        // );


        $inputs = $request->all();
        $inputs['user_id']=Auth()->user()->id;
        $category  = Category::create($inputs);
        alert()->success(__('category.done') . __('category.add'))->autoclose(5000);
        return redirect(route('dashboard.category.index'));
        return response()->json(['status' => true, 'url' => route('dashboard.category.index')], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['item' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

    
        $inputs = $request->all();
        $category->update($inputs);
        alert()->success(__('category.done') . __('category.edit'))->autoclose(5000);
        return redirect(route('dashboard.category.edit', $category->id));
        return response()->json(['status' => true, 'url' => route('dashboard.category.edit', $category->id)], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        
        $category->delete();
        alert()->success( __('category.done').__('category.delete'))->autoclose(5000);
        return redirect( route('dashboard.category.index'));
    }
}
