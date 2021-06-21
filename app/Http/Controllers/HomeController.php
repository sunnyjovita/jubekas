<?php

namespace App\Http\Controllers;

// all products
use App\Models\Clothes;
use App\Models\Cars;
use App\Models\Furniture;
use App\Models\electronic;
use App\Models\property;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function getPost(){
        $random_cars = Cars::all()->random(2);
        $random_clothes = Clothes::all()->random(2);
        $random_furniture = Furniture::all()->random(2);
        $random_electronic = electronic::all()->random(2);
        $random_property = property::all()->random(2);


        $response=[
            'cars' => $random_cars,
            'clothes'=>$random_clothes,
            'furniture'=>$random_furniture,
            'electronic'=>$random_electronic,
            'property'=>$random_property

        ];

        return response()->json($response);
    }




}
