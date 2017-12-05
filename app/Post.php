<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\TypeOfDisease;
use App\DetailPost;

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

    public function relatedPosts()
    {
    	$type_ids = $this->type_of_diseases->pluck('id')->toArray();
    	$post_ids = DetailPost::whereIn('type_of_diseases_id', $type_ids)
    		->where('post_id', '<>', $this->id)
    		->pluck('post_id')
    		->toArray();
    	return Post::whereIn('id', $post_ids)->limit(6)->orderBy('view', 'desc')->get();
    }
}
