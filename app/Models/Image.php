<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable=[
        'path'
    ];

    public static function getUrlByFilePath($filePath, $w = null, $h = null){
        if (!$w && !$h) {
            return Storage::url($filePath);
        }
            $path = dirname($filePath);
            $filename = basename ($filePath);
            $file = "{$path}/crop_{$w}x{$h}_{$filename}";
            return Storage::url($file);
    }

    public function getUrl ($w = null, $h = null){
        return self::getUrlByFilePath($this->path, $w, $h);
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }

    protected function casts(): array
    {
        return [
            'labels' => 'array',
        ];
    }
}
