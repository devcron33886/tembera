<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Notifications\AdminContactNotification;
use Illuminate\Support\Facades\Notification;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());
        Notification::route('mail','mbabazijacques@gmail.com')->notify(new AdminContactNotification());

        return to_route('contact.index')->with('message', 'Thank you for contacting us check your email for more details.');
    }
}
