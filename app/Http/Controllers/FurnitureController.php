<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\Models\Furniture;

class FurnitureController extends Controller
{
    //
    public function furniture()
    {
        
        $furniture = Furniture::all();
        return response()->json($furniture);
      
    }

    public function details($id){
        
        // api
        $furnituredetails = Furniture::find($id);
        return response()->json($furnituredetails);
 
    }
    
    

}


