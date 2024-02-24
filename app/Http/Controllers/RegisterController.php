<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    function index()
    {
        return view("register");
    }

    function store(Request $request)
    {
        //code pengecekan apakah email sudah ada atau belum
        $cekUser = User::where('email', $request->email)->first();
        if ($cekUser) {
            return back()->with(['error' => "Email Already Exist!!!"]);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //Cara yang dikasih
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();

        // dd($request);

        return redirect()->route('login')->with(['success' => "Register Save Successfully"]);

    }
}