<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) {
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request, $user);
    }


    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        if(Auth::user()->role === 'admin'){
            return redirect()->intended('/admin/dashboard');        }
        return redirect()->intended('/');
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
        return redirect('/');
    }
}
