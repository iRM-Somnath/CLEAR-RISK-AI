<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\SiteSettings;


class ContactUs extends Controller
{
    public function index()
    {
        $title = "Contact Us";
        $oldData = SiteSettings::find(1);
        return view('front.pages.contact', compact("title","oldData"));
    }

    

    public function submit(Request $request)
    {
        // Handle the form submission
        // You can validate the form data and save it to the database or send an email
        // For example:

        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|numeric|min:10|max:15',
            'email' => 'required|email',
            'designation' => 'required|max:255',
            'country' => 'required|max:255',
            'message' => 'required',
        ]);

        // Create a new Contact model instance
        $contact = new Contact();
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->phone_number = $request->input('phone_number');
        $contact->email = $request->input('email');
        $contact->designation = $request->input('designation');
        $contact->country = $request->input('country');
        $contact->message = $request->input('message');

        // Save the contact form data to the database
        $contact->save();

        // Redirect the user back to the contact form with a success message
        // return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully.');
    }
}
