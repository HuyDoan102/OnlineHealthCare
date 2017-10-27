<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\TypeOfDisease;

class Post extends Model
{
    protected $table = "posts";
    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'content', 'source', 'status'
    ];

    public function type_of_diseases()
    {
        return $this->belongsToMany(TypeOfDisease::class, 'type_post', 'post_id', 'type_of_diseases_id');
    }
}
