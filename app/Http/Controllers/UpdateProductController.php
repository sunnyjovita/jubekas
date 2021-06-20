<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

// display all products that each user has
use App\Models\Clothes;
use App\Models\Cars;
use App\Models\Furniture;
use App\Models\electronic;
use App\Models\property;

// include validator class
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController;

use DB;

use Auth;

class UpdateProductController extends BaseController
{
    //
	public function updateCars($id){

			$cars = Cars::find($id);
			return response()->json($cars);
	    	
    }


    public function updateClothes($id){

    	$clothes = Clothes::find($id);
		return response()->json($clothes);

    }

    public function updateFurniture($id){

    	$furniture = Furniture::find($id);
		return response()->json($furniture);

    }

    public function updateElectronic($id){

    	$electronic = electronic::find($id);
		return response()->json($electronic);

    }

    public function updateProperty($id){

    	$property = property::find($id);
		return response()->json($property);

    }


    public function updateCarsPost(Request $req, $id){
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
	
			$cars = Cars::find($req->id);
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
	        $cars->phoneNumber=$req->phoneNumber;

	        $result = $cars->save();
	        if($result){


			$response = [
				'message'=>'Product updated successfully',
                'id' => $cars->id,
				'title' =>$cars->title,
				'brand' => $cars->brand,
				'year' => $cars->year,
				'distance' => $cars->distance,
				'condition'=>$cars->condition,
				'price'=>$cars->price,
				'description'=>$cars->description,
				'image'=>$cars->image,
				'location'=>$cars->location,
				'categories'=>$cars->categories,
				'owner'=>$cars->owner,
				'phoneNumber'=>$cars->phoneNumber


			];
			return response()->json($response);

		}
		else{
			return response()->json([
				'message'=>'update failed'
			]);
		}

    }

    public function updateClothesPost(Request $req, $id){
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
	
			$clothes = Clothes::find($req->id);
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

	        $result = $clothes->save();
	        if($result){


			$response = [
				'message'=>'Product updated successfully',
                'id' => $clothes->id,
				'title' =>$clothes->title,
				'type' => $clothes->type,
				'condition'=>$clothes->condition,
				'price'=>$clothes->price,
				'description'=>$clothes->description,
				'image'=>$clothes->image,
				'location'=>$clothes->location,
				'categories'=>$clothes->categories,
				'owner'=>$clothes->owner,
				'phoneNumber'=>$clothes->phoneNumber


			];
			return response()->json($response);

		}
		else{
			return response()->json([
				'message'=>'update failed'
			]);
		}

    }

    public function updateFurniturePost(Request $req, $id){
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
	
			$furniture = Furniture::find($req->id);
	    	$furniture->title = $req->title;
	        $furniture->type = $req->type;
	        $furniture->condition = $req->condition;
	        $furniture->price = $req->price;
	        $furniture->description = $req->description;
	        $furniture->image = $req->image;
	        $furniture->location = $req->location;
	        $furniture->categories = '2';
	        $furniture->owner=$req->owner;
	        $furniture->phoneNumber=$req->phoneNumber;

	        $result = $furniture->save();
	        if($result){


			$response = [
				'message'=>'Product updated successfully',
                'id' => $furniture->id,
				'title' =>$furniture->title,
				'type' => $furniture->type,
				'condition'=>$furniture->condition,
				'price'=>$furniture->price,
				'description'=>$furniture->description,
				'image'=>$furniture->image,
				'location'=>$furniture->location,
				'categories'=>$furniture->categories,
				'owner'=>$furniture->owner,
				'phoneNumber'=>$furniture->phoneNumber


			];
			return response()->json($response);

		}
		else{
			return response()->json([
				'message'=>'update failed'
			]);
		}

    }

    public function updateElectronicPost(Request $req, $id){
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
	
			$electronic = electronic::find($req->id);
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
	        $electronic->phoneNumber = $req->phoneNumber;

	        $result = $electronic->save();
	        if($result){


			$response = [
				'message'=>'Product updated successfully',
                'id' => $electronic->id,
				'title' =>$electronic->title,
				'type' => $electronic->type,
				'brand'=> $electronic->brand,
				'condition'=>$electronic->condition,
				'price'=>$electronic->price,
				'description'=>$electronic->description,
				'image'=>$electronic->image,
				'location'=>$electronic->location,
				'categories'=>$electronic->categories,
				'owner'=>$electronic->owner,
				'phoneNumber'=>$electronic->phoneNumber


			];
			return response()->json($response);

		}
		else{
			return response()->json([
				'message'=>'update failed'
			]);
		}

    }

    public function updatePropertyPost(Request $req, $id){
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
	
			$property = property::find($req->id);
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
	        $property->owner=$req->owner;
	        $property->price = $req->price;
	        $property->phoneNumber = $req->phoneNumber;

	        $result = $property->save();
	        if($result){


			$response = [
				'message'=>'Product updated successfully',
                'id' => $property->id,
				'title' =>$property->title,
				'type' => $property->type,
				'landSize'=> $property->landSize,
				'buildingSize'=>$property->buildingSize,
				'address'=>$property->address,
				'bedrooms'=>$property->bedrooms,
				'bathrooms'=>$property->bathrooms,
				'year'=>$property->year,
				'certificate'=>$property->certificate,
				// 'condition'=>$furniture->condition,
				'price'=>$property->price,
				'description'=>$property->description,
				'image'=>$property->image,
				'location'=>$property->location,
				'categories'=>$property->categories,
				'owner'=>$property->owner,
				'phoneNumber'=>$property->phoneNumber


			];
			return response()->json($response);

		}
		else{
			return response()->json([
				'message'=>'update failed'
			]);
		}

    }
	


}
