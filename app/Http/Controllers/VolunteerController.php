<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'program' => 'required|string',
            'experience' => 'nullable|string',
            'motivation' => 'required|string',
            'availability' => 'required|string',
        ]);

        try {
            Mail::raw(
                "New Volunteer Application\n\n" .
                "Name: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "Phone: {$validated['phone']}\n" .
                "Preferred Program: {$validated['program']}\n" .
                "Experience: {$validated['experience']}\n" .
                "Motivation: {$validated['motivation']}\n" .
                "Availability: {$validated['availability']}",
                function ($message) use ($validated) {
                    $message->to('info@communityfirstuganda.org')
                            ->subject('Volunteer Application: ' . $validated['name'])
                            ->replyTo($validated['email'], $validated['name']);
                }
            );

            return back()->with('success', 'Thank you for applying! We will review your application and get back to you within 48 hours.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an issue submitting your application. Please try again later.');
        }
    }
}
