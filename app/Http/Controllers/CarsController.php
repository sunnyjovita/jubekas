<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Clothes;
use App\Models\Furniture;
use App\Models\electronic;
use App\Models\property;

use Session;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cars()
    {

        // api
        $cars = Cars::all();
        return response()->json($cars);
      
    }

    public function details($id){
        
        // api
        $carsdetails = Cars::find($id);
        return response()->json($carsdetails);
        // return Cars::find($id);
    }
    
    public function search(Request $req){
        // return $req->input();
        $carsSearch = Cars::where('title', 'like', '%'.$req->input('query').'%')->get(); 
        $clothesSearch = Clothes::where('title', 'like', '%'.$req->input('query').'%')->get();
        $furnitureSearch = Furniture::where('title', 'like', '%'.$req->input('query').'%')->get();
         $electronicSearch = electronic::where('title', 'like', '%'.$req->input('query').'%')->get();
          $propertySearch = property::where('title', 'like', '%'.$req->input('query').'%')->get();

        // return view('search', ['cars'=>$carsSearch, 'clothes'=>$clothesSearch]);

        // api
            // dd($response);
        // return response()->json([$carsSearch, $clothesSearch]);
        $response = [
            'cars'=>$carsSearch,
            'clothes'=>$clothesSearch,
            'furniture'=>$furnitureSearch,
            'property'=>$propertySearch,
            'electronic'=>$electronicSearch

        ];
        return response()->json($response);
        // return response()->json(['cars'=>$carsSearch, 'clothes'=>$clothesSearch]);

    }

    // static function chatSeller(Request $req){
    //     // if($req->session()->has('user')){
    //     //     return "Hello this is chat seller page";
    //     // }
    //     // else{
    //     //     return redirect('/login');
    //     // }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
