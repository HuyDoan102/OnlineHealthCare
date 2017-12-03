<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Article;

class Comment extends Model
{
    protected $table = "comments";
    protected $primaryKey = "id";

    protected $fillable = [
        'comment', 'article_id', 'user_id'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
