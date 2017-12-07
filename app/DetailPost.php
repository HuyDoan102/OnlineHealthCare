<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPost extends Model
{
    //

	protected $table = 'detail_posts';

	protected $fillable = [
		'post_id', 'type_of_diseases_id'
	];

	protected $primaryKey = null;

	public $timestamps = false;

}
