<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
class BasicController extends Controller
{
    public function index()
    {
        return view('static.home');
    }

    public function about()
    {
        return view('static.about');
    }

    public function contact()
    {
        return view('static.contact');
    }

    public function submit(ContactRequest $request)
    {
        //$request->validate();
    }
}
