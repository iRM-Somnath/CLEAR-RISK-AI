<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscribedNewsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubscribedNewsletterController extends Controller
{
    // Show the form for subscribing
    public function create()
    {
        // Return the view where the user can subscribe to the newsletter
        $title = "Newsletter Subscription";
        return view('admin.pages.subscribed-newsletters.create', compact('title'));
    }

    // Handle the form submission and store the email
    public function save(Request $request)
    {
        DB::beginTransaction(); // Start a database transaction

        try {
            // Validate the incoming request for the email
            $validated = $request->validate([
                'email' => 'required|email|unique:subscribed_newsletters,email',  // Ensure email is valid and unique
            ]);

            // If validation passes, proceed to save the email
            if ($validated) {
                // Create a new subscription with the validated email
                SubscribedNewsletter::create([
                    'email' => $request->email,
                ]);

                DB::commit(); // Commit the transaction

                // Return a success response
                return response()->json([
                    'status' => true,
                    'message' => 'You have successfully subscribed to the newsletter!',
                    'redirect' => route('subscribed_newsletters.create'),
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction in case of error

            // Return an error response with the exception message
            return response()->json([
                'status' => false,
                'message' => 'Oops! Something went wrong. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
