<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactUs;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
          
            $articles= Article::where('is_accepeted', true)->orderBy('created_at', 'desc')->take(6)->get();
            return view('welcome', compact('articles'));
    }

    public function contact_us(){
        return view('contactUs');
    }

    public function invioForm(Request $req){
        $user= Auth::user();
        $name =$req->name;
        $surname=$req->surname;
        $email=$req->email;
        $message=$req->user_message;
        try{
            Mail::to('OjHtI@example.com')->send(new ContactUs(Auth::user(),$name, $surname, $email, $message));
            return redirect(route('homepage'))->with('success', 'Il tuo messaggio è stato inviato con successo');
        }catch(Exception $error){
            return redirect(route('homepage'))->with('error', 'Si è verificato un errore durante l\'invio del messaggio');   
        }
    }
}