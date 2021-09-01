<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = contact::all();
        return view('admin.contact.index', ['items' => $contacts]);
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
     * @param  \App\Models\Feature  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        $contact->seen = 'Yes';
        $contact->save();

        return view('admin.contact.show')->with('item', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
       
        $contact->delete();
        alert()->success(__('contact.done') . __('contact.delete'))->autoclose(5000);
        return redirect(route('dashboard.contact.index'));
    }
}
