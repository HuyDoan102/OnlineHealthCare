<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $table = "feedbacks";
    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'content', 'email',
    ];
}
