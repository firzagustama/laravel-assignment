<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function index() {
        $messages = ContactUs::all();
        return view('index', ['messages' => $messages]);
    }

    function create() {
        return view('create');
    }

    function store(Request $request) {
        ContactUs::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email_address' => $request->input('email_address'),
            'phone_number' => $request->input('phone_number'),
            'message' => $request->input('message'),
        ]);

        return redirect('/')->with('success');
    }
}
