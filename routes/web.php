<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VolunteerController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/volunteer/submit', [VolunteerController::class, 'submit'])->name('volunteer.submit');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/robots.txt', function () {
    return response()->view('seo.robots')->header('Content-Type', 'text/plain');
});

Route::get('/sitemap.xml', function () {
    return response()->view('seo.sitemap')->header('Content-Type', 'application/xml');
});
