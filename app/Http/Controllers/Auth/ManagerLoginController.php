<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ManagerLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}
    
    public function showLoginForm()
    {
    	return view('manager.auth.manager-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user is
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'type' => 1])) {
            // if successful, redirect to their intended locale_get_display_region
            return redirect()->intended('/manager/home');
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only(['email']));
    }
}
