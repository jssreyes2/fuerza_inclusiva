<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user();

        return view('frontend.contact', ['user' => $user]);
    }


    public function saveContact(Request $request)
    {
        Contact::saveContact($request);

        return response()->json(['status' => 'success', 'alert' => env('MSJ_SUCCESS')]);
    }
}
