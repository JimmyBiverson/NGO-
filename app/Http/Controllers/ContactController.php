<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'reason' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::raw(
                "Name: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "Phone: {$validated['phone']}\n" .
                "Reason: {$validated['reason']}\n" .
                "Subject: {$validated['subject']}\n\n" .
                "Message:\n{$validated['message']}",
                function ($message) use ($validated) {
                    $message->to('info@communityfirstuganda.org')
                            ->subject('Contact Form: ' . $validated['subject'])
                            ->replyTo($validated['email'], $validated['name']);
                }
            );

            return back()->with('success', 'Thank you for your message! We will get back to you within 24 hours.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an issue sending your message. Please try again later.');
        }
    }
}
