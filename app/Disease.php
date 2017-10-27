<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\TypeOfDisease;

class Disease extends Model
{
    protected $table = "disaeses";
    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'symptom', 'type_of_diseases_id'
    ];

    public function type_of_diseases()
    {
        return $this->belongsTo(TypeOfDisease::class, 'type_of_diseases_id');
    }
}
