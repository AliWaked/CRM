<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('contact.index', [
            'contacts' => Contact::paginate(),
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
    public function store(ContactRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $path = $file->storeAs('/uploads', time() . '*' . $file->getClientOriginalName(), ['disk' => 'public']);
            $data['avatar'] = $path;
        }
        // dd($request->all());
        Contact::create($data);
        return to_route('contact.index', ['user' => Auth::user()])->with('success', 'add new Contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact): View
    {
        return view('contact.show', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact): View
    {
        return view('contact.edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact): RedirectResponse
    {
        $path = $contact->avatar;
        $data = $request->validated();
        if ($request->hasFile('avatar') && $contact->avatar) {
            $data['avatar'] = $this->storeAvatarImage($request->file('avatar'));
        }
        $contact->update($data);
        if (isset($data['avatar'])) {
            Storage::disk(Contact::DISK)->delete($path);
        }
        return to_route('contact.index')->with('success', 'updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();
        return to_route('contact.index')->with('delete', 'sucess');
    }

    public function trashed(): View
    {
        return view('contact.trash', [
            'contacts' => Contact::onlyTrashed()->paginate(),
        ]);
    }
    public function restore(string $id): RedirectResponse
    {
        Contact::onlyTrashed()->findOrFail($id)->restore();
        return to_route('contact.index')->with('success', 'restore contact success');
    }
    public function forceDeleting(string $id): RedirectResponse
    {
        Contact::onlyTrashed()->findOrFail($id)->forceDelete();
        return to_route('contact.index')->with('delete', 'force deleting');
    }
    public function storeAvatarImage(object $file): string
    {
        return $file->storeAs('/uploads', time() . '*' . $file->getClientOriginalName(), ['disk' => Contact::DISK]);
    }
}
