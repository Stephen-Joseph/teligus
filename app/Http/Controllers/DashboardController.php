<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'You must be logged in to access the dashboard.');
        }

        // Retrieve the authenticated user
        $user = Auth::user();

        // Return the dashboard view with user data
        return view('dashboard', compact('user'));
    }

    public function dashboard()
    {
        $userCount = User::count(); // Count total users
        return view('dashboard', compact('userCount'));
    }
}