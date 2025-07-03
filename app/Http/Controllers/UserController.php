<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function destroy(User $user){
        $user=Auth::user();
        $user->profile()->delete();
        $user->delete(); 
        return redirect(route('homepage'))->with('message', 'L \'utente è stato eliminato con successo');
    }
    public function dashboard(User $user){
        $user=Auth::user();
        $profile=  $user->profile;
        $user = auth()->user()->loadCount('articles');
        $accepted_articles=auth()->user()->articles()->where('is_accepted', true)->get();
        $not_accepted_articles=auth()->user()->articles()->where('is_accepted', null)->get();
        return view('auth.dashboard', compact('user', 'profile', 'accepted_articles', 'not_accepted_articles'));
    }

        public function create(){        
        return view('auth.create-profile');
    }

    public function edit(Profile $profile){ 
        return view('auth.edit-profile', compact('profile'));
    }
}
