<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\property;

class PropertyController extends Controller
{
    //
    public function property()
    {
        
        $property = property::all();
        return response()->json($property);
      
    }

    public function details($id){
        
        // api
        $propertydetails = property::find($id);
        return response()->json($propertydetails);
 
    }
}
