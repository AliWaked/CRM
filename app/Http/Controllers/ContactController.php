<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('contact.index', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('contact.create', [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'birthday' => 'required|date|max:255',
            'company' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'phone_number' => 'required|string|max:100',
        ]);
        // dd($request->all());
        Contact::create([...$request->all(),'user_id' => Auth::id()]);
        return to_route('contact.index', ['user' => Auth::user()])->with('success', 'add new Contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact.show', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'birthday' => 'required|date|max:255',
            'company' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'phone_number' => 'required|string|max:100',
        ]);
        $contact->update($request->all());
        return to_route('contact.index')->with('success', 'updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('contact.index')->with('delete','sucess');
    }
}
