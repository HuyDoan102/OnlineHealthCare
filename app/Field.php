<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Field extends Model
{
    protected $table = "fields";
    protected $primaryKey = "id";

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_field', 'field_id', 'user_id');
    }
}
