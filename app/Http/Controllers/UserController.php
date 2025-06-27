<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(User $user){
        $user=Auth::user();
        $profile=  $user->profile;
        return view('auth.dashboard', compact('user', 'profile'));
    }
}
