<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
        'path'
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
