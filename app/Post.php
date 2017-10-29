<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\TypeOfDisease;

class Post extends Model
{
    protected $table = "posts";
    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'content', 'source', 'status', 'image', 'view'
    ];

    public function type_of_diseases()
    {
        return $this->belongsToMany(TypeOfDisease::class, 'detail_posts', 'post_id', 'type_of_diseases_id');
    }
}
