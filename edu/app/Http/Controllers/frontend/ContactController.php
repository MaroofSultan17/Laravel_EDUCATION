<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
    }

    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]
        );

        $contact = new ContactModel();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return back()->withSuccess('Thanks for Contacting. We\'ll Contact you ASAP!');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactModel $contactModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactModel $contactModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactModel $contactModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactModel $contactModel)
    {
        //
    }
}
