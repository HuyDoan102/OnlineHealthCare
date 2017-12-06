<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialtie extends Model
{
    protected $table = 'specialties';
    protected $fillable = [
    	'user_id', 'field_id', 'years_of_experience', 'dipoma'
    ];
    
    protected $primaryKey = null;

    public $timestamps = false; 
}
