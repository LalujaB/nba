<?php

namespace App\Http\Controllers;

use App\User as User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
            'password' => bcrypt($request->password)
        ]);

        return redirect(route('homepage'));
    }
}