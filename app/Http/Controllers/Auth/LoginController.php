<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http; 

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
        // return view('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'You have been logged out successfully!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $email = $request->input('email');

        $credentials = [
            'email' => $email,
            'password' => $request->input('password'),
        ];
       
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
          
            if ($user->user_type == 'super_admin') {
                return redirect('/super-admin/dashboard');
            }
            if ($user->user_type == 'admin') {
                return redirect('admin/dashboard');
            }
            if ($user->user_type == 'user') {
                return redirect('/');
            }
            return view('auth.login');
        }      
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function SuperAdminDashboard()
    {
        return view('dashboard');
    }
    public function AdminDashboard()
    {
        return view('dashboard');
    }

   



}
