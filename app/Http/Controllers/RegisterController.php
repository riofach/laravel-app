<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index()
    {
        return view("register");
    }

    function store(Request $request)
    {
        dd($request);
    }
}