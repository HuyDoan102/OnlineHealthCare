<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\TypeOfDisease;
use App\Field;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $type_of_diseases = TypeOfDisease::all();
        $fields = Field::all();
        view()->share('type_of_diseases', $type_of_diseases);
        view()->share('fields', $fields);
    }
}
