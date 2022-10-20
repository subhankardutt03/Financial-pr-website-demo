<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('admin.index');
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
            $admin = Auth::guard('admin')->user();
            Admin::where('email', $admin->email)->update([
                'status' => 1
            ]);
            return redirect()->route('admin.dashboard')->with('success', 'You have logged in successfully ');
        } else {
            return back()->with('error', 'your credentials is not matched');
        }
    }

    public function Logout()
    {
        $admin = Auth::guard('admin')->user();
        Auth::guard('admin')->logout();
        Admin::where('email', $admin->email)->update([
            'status' => 0
        ]);
        return redirect()->route('login_form')->with('success', 'You logged out successfully');
    }
}