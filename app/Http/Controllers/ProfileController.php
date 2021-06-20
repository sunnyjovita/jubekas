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



class ProfileController extends BaseController
{
	public function products($id){
		
		$owner = User::find($id);
		// $furniture = Furniture::where(['owner'=>$owner['id']]);
		$cars = Cars::where('owner', $owner['id'])->get();
		$clothes = Clothes::where('owner', $owner['id'])->get();
		$furniture = Furniture::where('owner', $owner['id'])->get();
		$electronics = electronic::where('owner', $owner['id'])->get(); 
		$property = property::where('owner', $owner['id'])->get();
		// User::where(['email'=>$req->email])->first();

		$response = [
            'cars'=>$cars,
            'clothes'=>$clothes,
            'furniture'=>$furniture,
            'electronics'=>$electronics,
            'property'=>$property

        ];
        // return $cars;
        return response()->json($response);
	}


	public function updateProfile(Request $req){

		// return $req->input();
		$validator = Validator::make($req->all(), [
			'name'=>['required', 'string'],
			'email'=>['required', 'string', 'email'],
			'phoneNumber' => 'required|regex:/(^62[0-9].*$)/',
		]);

		if($validator->fails()){
			return $this->responseError('Update User Failed', 422, $validator->errors());
		}

		try{

			$data = User::find($req->id);
			$data->name = $req->name;
			$data->email = $req->email;
			$data->phoneNumber = $req->phoneNumber;


			$data->save();


			$response = [
				'message'=>'user updated successfully',
                'id' => $data->id,
				// 'token' => $user->createToken('MyToken')->accessToken,
				'name' =>$data->name,
				'email' => $data->email,
				'phoneNumber' => $data->phoneNumber

				// 'password' => $user->password


			];
			// dd($response);
			return response()->json($response);
		// return response()->json(['message'=>'profile updated successfully']);
	}
	catch(\Exception $exception){
		// dd($exception);
		return $exception;
	}

	}



}
