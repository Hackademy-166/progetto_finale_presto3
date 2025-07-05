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
        
        $articles= Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('welcome', compact('articles'));
    }
    
    public function contact_us(){
        $users=Auth::user();
        return view('contactUs', compact('users'));
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
    
    public function search(Request $req){
        $query=$req->input('query');
        $articles=Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('articles.searched', ['articles'=>$articles , 'query'=>$query]);
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}