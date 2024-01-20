<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function Index(Request $request)
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->role == "user")
            {
                return redirect()->route('Barang.index');
            }
            else
            {
                return redirect()->route('Users.index');
            }
        }
        else{
            return redirect()->route('login')->with('eror',"email dan password salah");
        }
    }
}