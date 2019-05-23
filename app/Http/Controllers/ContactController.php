<?php

namespace App\Http\Controllers;

use App\Contact;
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
        return view('admin.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('admin.contact.create', compact('contacts'));
    }
    
    public function approve($id)
    {
       $approve = Contact::where('id', $id)->update(['status' => 'approved']);
       $contacts = Contact::all();
       return view('admin.contact.create', compact('contacts'));
    }


    public function unApprove($id)
    {
       $approve = Contact::where('id', $id)->update(['status' => 'unapproved']);
       $contacts = Contact::all();
       return view('admin.contact.create', compact('contacts'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Contact::create([
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'status' => 'unapproved'
        ]);

        if($create)
        {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function delete($contact)
    {
        $delete = Contact::find($contact);
        
        if($delete)
        {
          $delete->delete();
          $contacts = Contact::all();
          return view('admin.contact.create',compact('contacts'));
        }

    }
}



