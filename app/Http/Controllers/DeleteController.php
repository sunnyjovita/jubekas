<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Clothes;
use App\Models\Furniture;
use App\Models\electronic;
use App\Models\property;

use Session;

class DeleteController extends Controller
{
    //

    public function deleteCars($id){
    	$cars = Cars::find($id);
    	$result = $cars->delete();
    	if($result){
    		return ['result'=>'product has been deleted'];

    	} 
    	else{
    		return response()->json('Delete product failed');
    	}
    

    }

    public function deleteClothes($id){
    	$clothes = Clothes::find($id);
    	$result = $clothes->delete();
    	if($result){
    		return ['result'=>'Product has been deleted'];

    	} 
    	else{
    		return response()->json('Delete product failed');
    	}

    }

    public function deleteFurniture($id){
    	$furniture = Furniture::find($id);
    	$result = $furniture->delete();
    	if($result){
    		return ['result'=>'product has been deleted ' .$id];

    	} 
    	else{
    		return response()->json('Delete product failed');
    	}

    }

    public function deleteElectronic($id){
    	$electronic = electronic::find($id);
    	$result = $electronic->delete();
    	if($result){
    		return ['result'=>'product has been deleted ' .$id];

    	} 
    	else{
    		return response()->json('Delete product failed');
    	}


    }

    public function deleteProperty($id){
    	$property = property::find($id);
    	$result = $property->delete();
    	if($result){
    		return ['result'=>'product has been deleted ' .$id];

    	} 
    	else{
    		return response()->json('Delete product failed');
    	}

    }
}
