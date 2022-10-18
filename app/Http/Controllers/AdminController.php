<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('admin.admin_master');
    }

    public function Index()
    {
        return view('admin.auth.admin_login');
    }

    public function Login(Request $request)
    {
        $check = $request->all();
        // dd($check);
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('success', 'You have logged in successfully ');
        } else {
            return back()->with('error', 'your credentials is not matched');
        }
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('success', 'You logged out successfully');
    }
}