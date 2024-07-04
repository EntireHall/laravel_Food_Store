<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function menu()
    {
        return view('pages.menu');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('POST')) {
            new ContactMail($request->all());

            // return (new ContactMail($request->all()))->render();
            return back()->with('success', 'Thanks for the message');
        }
        return view('pages.contact');
    }

    public function reservation(Request $request)
    {
        if ($request->isMethod('POST')) {
            // Mail::to('aamm71@icloud.com')->send(
                new ReservationMail($request->all());
            // );
            //return (new ReservationMail($request->all()))->render();
            return back()->with('success', 'Thanks for the message; We will confirm your reservation status with you soon');
        }
        return view('pages.reservation');
    }

}
