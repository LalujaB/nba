<?php

namespace App\Http\Controllers;

use App\Mail\UserVerification;
use App\User as User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function create () {

        return view('register.create');
    }



    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | confirmed:password_confirmation | min:6']);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_verified' => false,
        ]);

        Mail::to($request->email)->send(new UserVerification($user));

        return redirect()->route('login');
    }
}
