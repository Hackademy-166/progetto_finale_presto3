<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    
    /**
    * Display a listing of the resource.
    */
    public function index()
    {   $articles= Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(10);
        return view('articles.index-articles', compact('articles'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('articles.create-articles');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Article $article)
    {
        //
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Article $article)
    {
        if(Auth::user() && Auth::user()->id == $article->user_id){
            
            return view('articles.edit-article', compact('article')); 
        }
        return redirect(route('home'))->with('access_denied', 'Accesso Negato'); // messaggni nella vista
    }
    
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Article $article)
    {
        if(Auth::user()&&Auth::user()->id == $article->user_id){
            $article->delete();
            return redirect(route('articles.index'))->with('message', 'Articolo eliminato con successo'); //aggiunger messaggio nella vista
        }
    }
    public function category_page(Category $category){
        $articles=$category->articles->where('is_accepted', true);
        return view('articles.categories-index', compact('articles', 'category'));
    }
}
