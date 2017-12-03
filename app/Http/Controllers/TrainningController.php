<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainning;

class TrainningController extends Controller
{
    $attributes = ['age' => Trainning::where('age')->get(),
    'gender' => Trainning::where('gender')->get(),
    'weight' => Trainning::where('weight')->get(),
    'status' => Trainning::where('status')->get(),
    'disease' => Trainning::where('disease')->get(),
    ];
    public function InformationGain()
    {
        $y = Trainning::where('result', 'yes')->count();
        $n = Trainning::where('result', 'yes')->count();
        $s = $y + $n;
        return (-($n / $s) * log(($n / $s), 2)) - (($y / $s) * log($y / $s, 2));
    }

    public function entropy($attribute)
    {
        $subtraining=$attributes[$attribute];
        $resultY = Trainning::where()->select('result'); //vi du age=21 result co bao nhieu
        foreach($subtraining as $key => $sub)
        {

        }
    }

}
