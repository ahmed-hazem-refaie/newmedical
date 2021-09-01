<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', ['items' => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $about->seen = 'Yes';
        $about->save();

        return view('admin.about.show')->with('item', $about);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
       
        $about->delete();
        alert()->success(__('about.done') . __('about.delete'))->autoclose(5000);
        return redirect(route('dashboard.about.index'));
    }
}
