<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Clothes;
use App\Models\Furniture;
use App\Models\electronic;
use App\Models\property;

// include validator class
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController;

class SellController extends BaseController
{
    //
    public function CarPost(Request $req){
    	// create validation
    	$validator = Validator::make($req->all(), [
    		'title'=>['required', 'string', 'max:75'],
    		'brand'=>['required', 'string'],
    		'year'=>['required', 'string'],
    		'distance'=>['required', 'string'],
    		'condition'=>['required', 'string'],
    		'price'=>['required', 'string'],
            'image'=>['required', 'string'],
    		'location'=>['required', 'string'],
    		'description'=>['required', 'string']
		]);

		if($validator->fails()){
			return $this->responseError('Create Product Failed', 422, $validator->errors());
		}

    	$cars = new Cars;
    	$cars->title = $req->title;
    	$cars->brand = $req->brand;
    	$cars->year = $req->year;
    	$cars->distance = $req->distance;
    	$cars->condition = $req->condition;
    	$cars->price = $req->price;
    	$cars->description = $req->description;
    	$cars->image = $req->image;
    	$cars->location = $req->location;
    	$cars->categories = '4';
        $cars->owner=$req->owner;
        $cars->phoneNumber = $req->phoneNumber;

    	$cars->save();
    	return response()->json([


            'message'=> 'Cars product addedd successfully',
            // "image"=>$info
            'id'=>$cars->id,
            "image"=>$cars->image,
            'owner'=>$cars->owner,
            'phoneNumber'=>$cars->phoneNumber
            // "image"=>$photoUrl
        ]);
    }


    public function ClothesPost(Request $req){
        $validator = Validator::make($req->all(), [
            'title'=>['required', 'string', 'max:75'],
            'type'=>['required', 'string'],
            'condition'=>['required', 'string'],
            'price'=>['required', 'string'],
            'description'=>['required', 'string'],
            'location'=>['required', 'string'],
             'image'=>['required', 'string']
        ]);

        if($validator->fails()){
            return $this->responseError('Create Product Failed', 422, $validator->errors());
        }

        $clothes = new Clothes;
        $clothes->title = $req->title;
        $clothes->type = $req->type;
        $clothes->condition = $req->condition;
        $clothes->price = $req->price;
        $clothes->description = $req->description;
        $clothes->image = $req->image;
        $clothes->location = $req->location;
        $clothes->categories = '1';
        $clothes->owner=$req->owner;
        $clothes->phoneNumber = $req->phoneNumber;

        $clothes->save();
        return response()->json([


            'message'=> 'Clothes product addedd successfully',
            "image"=>$clothes->image,
            'owner'=>$clothes->owner,
            'phoneNumber'=>$clothes->phoneNumber
         
        ]);
    }

    public function FurniturePost(Request $req){
        $validator = Validator::make($req->all(), [
            'title'=>['required', 'string', 'max:75'],
            'type'=>['required', 'string'],
            'condition'=>['required', 'string'],
            'price'=>['required', 'string'],
            'description'=>['required', 'string'],
            'location'=>['required', 'string'],
            'image'=>['required', 'string'],
        ]);

        if($validator->fails()){
            return $this->responseError('Create Product Failed', 422, $validator->errors());
        }

        $furniture = new Furniture;
        $furniture->title = $req->title;
        $furniture->type = $req->type;
        $furniture->condition = $req->condition;
        $furniture->price = $req->price;
        $furniture->description = $req->description;
        $furniture->image = $req->image;
        $furniture->location = $req->location;
        $furniture->categories = '2';
        $furniture->owner=$req->owner;
        $furniture->phoneNumber = $req->phoneNumber;


        $furniture->save();

        return response()->json([
            'message'=> 'Furniture product addedd successfully',
            "image"=>$furniture->image,
            'owner'=>$furniture->owner,
            'phoneNumber'=>$furniture->phoneNumber
        ]);
    }

     public function ElectronicPost(Request $req){
        $validator = Validator::make($req->all(), [
            'title'=>['required', 'string', 'max:75'],
            'type'=>['required', 'string'],
            'brand'=>['required', 'string'],
            'condition'=>['required', 'string'],
            'price'=>['required', 'string'],
            'description'=>['required', 'string'],
            'location'=>['required', 'string'],
            'image'=>['required', 'string'],
        ]);

        if($validator->fails()){
            return $this->responseError('Create Product Failed', 422, $validator->errors());
        }

        $electronic = new electronic;
        $electronic->title = $req->title;
        $electronic->type = $req->type;
        $electronic->brand = $req->brand;
        $electronic->condition = $req->condition;
        $electronic->price = $req->price;
        $electronic->description = $req->description;
        $electronic->image = $req->image;
        $electronic->location = $req->location;
        $electronic->categories = '3';
        $electronic->owner=$req->owner;
        $electronic->phoneNumber=$req->phoneNumber;


        $electronic->save();

        return response()->json([
            'message'=> 'Electronic product addedd successfully',
            "image"=>$electronic->image,
            'owner'=>$electronic->owner,
            'phoneNumber'=>$electronic->phoneNumber
        ]);
    }

     public function PropertyPost(Request $req){
        $validator = Validator::make($req->all(), [
            'title'=>['required', 'string', 'max:75'],
            'type'=>['required', 'string'],
            'landSize'=>['required', 'string'],
            'buildingSize'=>['required', 'string'],
            'address'=>['required', 'string'],
            'bedrooms'=>['required', 'string'],
            'bathrooms'=>['required', 'string'],
            'year'=>['required', 'string'],
            'certificate'=>['required', 'string'],
            'location'=>['required', 'string'],
            'price'=>['required', 'string'],
            'description'=>['required', 'string'],
            'image'=>['required', 'string'],
        ]);

        if($validator->fails()){
            return $this->responseError('Create Product Failed', 422, $validator->errors());
        }

        $property = new property;
        $property->title = $req->title;
        $property->type = $req->type;
        $property->landSize = $req->landSize;
        $property->buildingSize = $req->buildingSize;
        $property->address = $req->address;
        $property->bedrooms = $req->bedrooms;
        $property->bathrooms = $req->bathrooms;
        $property->year = $req->year;
        $property->certificate = $req->certificate;
        $property->image = $req->image;
        $property->location = $req->location;
        $property->categories = '5';
        $property->description = $req->description;
        $property->owner=$req->owner;
        $property->price = $req->price;
        $property->phoneNumber = $req->phoneNumber;


        $property->save();

        return response()->json([
            'message'=> 'Property product addedd successfully',
            "image"=>$property->image,
            'owner'=>$property->owner,
            "phoneNumber"=>$property->phoneNumber
        ]);
    }
}
