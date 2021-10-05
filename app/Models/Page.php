<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function posts () {
        return $this->belongsTo(App\Models\Post::class, "posts_has_tags");
    }
}
