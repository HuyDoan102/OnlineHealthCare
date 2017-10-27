<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Article extends Model
{
    protected $table = "articles";
    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'content', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
