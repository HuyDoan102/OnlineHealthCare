<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Comment;

class Article extends Model
{
    protected $table = "articles";
    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'content', 'creator'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
