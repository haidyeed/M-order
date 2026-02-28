<?php

namespace App\Http\Controllers;

use App\Http\Requests\{RegisterRequest, LoginRequest};
use Illuminate\Support\Facades\{Auth, Session};
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display register page.
     * 
     * @return Renderable
     */
    public function showRegister(){
        return view('auth.register');
    }

    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function showLogin(){
        return view('auth.login');
    }


    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::user()->role === 'admin'){
                return redirect()->route('admin.dashboard');

            }
            return redirect()->intended('/cart');

        }
        return back()->withErrors(['email','Invalid Credentials']);
    }

    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
