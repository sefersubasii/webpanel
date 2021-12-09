<?php

namespace App\Http\Controllers;

use App\Address;
use App\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $addresses = Address::all();

        return view('contact.show', compact('addresses'));
    }

    public function form(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        ContactForm::create($request->input());

        return redirect()->route('frontend.contact.show')
            ->with('success_message', 'Tebrikler, iletişim formunuz başarıyla gönderildi.');
    }
}
