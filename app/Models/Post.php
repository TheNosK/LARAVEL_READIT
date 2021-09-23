<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function categorie() {
        return $this->belongsTo(\App\Models\Categorie::class);
    }

    public function tags () {
        return $this->belongsToMany(\App\Models\Tag::class, 'posts_has_tags');
    }

    
}

