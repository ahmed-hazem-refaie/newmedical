<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrer;
use App\Models\CarrerAppliers;
use Illuminate\Http\Request;

class CarrerAppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Carrer $carrer )
    {
        $appliers = $carrer->appliers;
        return view('admin.applier.index', ['items' => $appliers , 'parent'=>$carrer]);
    }


    public function all_applier( )
    {

        $appliers = CarrerAppliers::all();
        return view('admin.applier.all_appliers', ['items' => $appliers ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Carrer $carrer)
    {



     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Carrer $carrer)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $applier
     * @return \Illuminate\Http\Response
     */
    public function show(Carrer $carrer , CarrerAppliers $applier)
    {
        $applier->seen = 1;
        $applier->save();

        return view('admin.applier.show')->with('item', $applier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $applier
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrer $carrer , CarrerAppliers $applier)
    {

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $applier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrer $carrer , CarrerAppliers $applier)
    {

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $applier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrer $carrer , CarrerAppliers $applier)
    {
       
        $applier->delete();
        alert()->success(__('applier.done') . __('applier.delete'))->autoclose(5000);
        return redirect(route('dashboard.applier.index'));
    }
}
