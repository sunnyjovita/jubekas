<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\electronic;

class ElectronicController extends Controller
{
    //
    public function electronic()
    {
        
        $electronic = electronic::all();
        return response()->json($electronic);
      
    }

    public function details($id){
        
        // api
        $electronicdetails = electronic::find($id);
        return response()->json($electronicdetails);
 
    }
}
