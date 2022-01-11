<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Validators;
use Symfony\Contracts\Service\Attribute\Required;
use Validator;

class UserAuth extends Controller
{
    //
    function register()
    {
        return view('auth.register');
    }
    function register_process(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|min:4|max:12'
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $loginuser = Auth::login($user);
        return redirect('dashboard');
    }
    function login()
    {
        return view('auth.login');
    }
    function login_process(Request $request)
    {
        $Controlls = $request->all();
        $rules = [
            'email' => 'required',
            'password' => 'required|min:4|max:12'
        ];
        $validator = Validator::make($Controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($Controlls);
        }
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            session()->flash('message', 'Invalid credentials');
            return redirect()->back()->With('error', "Email Not Found!");
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
