<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Http\Requests\StoreCafeRequest;
use App\Utilities\GaodeMaps;

class CafesController extends Controller
{
    //
    public function getCafes(){
        $cafes = Cafe::with('brewMethods')->get();
        return response()->json($cafes);
    }

    public function postNewCafe(StoreCafeRequest $request){
        $cafe = new Cafe();

        $cafe->name     = $request->get('name');
        $cafe->address  = $request->get('address');
        $cafe->city     = $request->get('city');
        $cafe->state    =$request->get('state');
        $cafe->zip      = $request->get('zip');
        $coordinates = GaodeMaps::geocodeAddress($cafe->address,$cafe->city,$cafe->state);
        $cafe->latitude=$coordinates['lat'];
        $cafe->longitude=$coordinates['lng'];
        $cafe->save();
    
        return response()->json($cafe, 201);
    }

    public function getCafe($id){
        $cafe = Cafe::where('id','=',$id)->with('brewMethods')->first();
        return response()->json($cafe);
    }
}
