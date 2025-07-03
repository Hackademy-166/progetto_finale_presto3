<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check= Article::where('is_accepted', null)->get();
        return view('revisor.dashboard', compact('article_to_check'));
    }
    
    public function accept(Article $article){
        $article->setAccepted(true);
        return redirect()
        ->back()
        ->with('message', "Hai accettato l'articolo $article->title");
    }
    
    public function reject(Article $article){
        $article->setAccepted(false);
        return redirect()
        ->back()
        ->with('message', "Hai rifiutato l'articolo $article->title");
    }  
    
    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ['email' => $user -> email]);
        return redirect()->back();
    }

    public function rejectRevisor(User $user){
        Artisan::call('app:reject-user-revisor', ['email' => $user -> email]);
        return redirect()->back();
    }

    public function changeStatus (Article $article) {
        if ($article->is_accepted) {
            $article->is_accepted = false;
            $article->save();
        } elseif (!$article->is_accepted) {
            $article->is_accepted = true;
            $article->save();
        }
        return redirect()->back()->with('message', 'Hai cambiato lo stato dell\'articolo');
    }
    
    public function revisorShow($article) {
        $article_to_check= Article::find($article);
        return view('revisor.revisor-show', compact('article_to_check'));
    }
    
}
