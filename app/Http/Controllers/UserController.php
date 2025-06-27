<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function destroy(){
        $user=Auth::user();
        $user->profile()->delete();
        $user->delete(); 
        return redirect(route('home'))->with('message', 'L \'utente è stato eliminato con successo');
    }
    public function dashboard(User $user){
        $user=Auth::user();
        $profile=  $user->profile;
        return view('auth.dashboard', compact('user', 'profile'));
    }

        public function create()
    {
        return view('auth.create-profile');
    }
}
