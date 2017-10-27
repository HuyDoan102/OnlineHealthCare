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
        return $this->belongsToMany(User::class, 'specialties', 'field_id', 'user_id')->withPivot('years_of_experience', 'dipoma');
    }
}
