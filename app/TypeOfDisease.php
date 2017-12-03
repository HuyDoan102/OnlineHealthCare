<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;
use App\Disease;

class TypeOfDisease extends Model
{
    protected $table = "type_of_diseases";
    protected $primaryKey = "id";

    protected $fillable = [
        'name'
    ];

    public function diseases()
    {
        return $this->hasMany(Disease::class, 'id', 'type_of_diseases_id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'detail_posts', 'type_of_diseases_id', 'post_id');
    }
}
