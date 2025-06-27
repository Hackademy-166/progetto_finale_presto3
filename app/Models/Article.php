<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Searchable;
    
    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function category(){
        return $this->belongsTo(Category::class);  // importare il modello
    }
    
    public function setAccepted($value){
        $this->is_accepted= $value;
        $this->save();
        return true;
    }
    
    public static function toBeRevisedCount(){
        return Article::where('is_accepted', null)->count();
    }
    
    public function toSearchableArray(){
        
        // $article = Article::factory()->create();
        // $this->assertModelExists($article);
        // dd($article);
        
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'categeory'=>$this->category,
        ];
    }
}
