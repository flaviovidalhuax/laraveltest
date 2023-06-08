<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
class PropertyController extends Controller
{
    public function filter($id=0,$name=''){
            try{
                if($id!=0){
                    $valId=User::find($id);
                }else {
                    $valId='no ingresaste tu id';
                }
                if ($name!='') {
                    //$valUser= User::firstWhere( 'name', $name);
                    $valUser= User::where( 'name', $name)->get();
                   
                }else{
                    $valUser='ingresa tu nombre a buscar';
                }
                //User::with('properties')->find($id);
                $valId=User::find($id);
                $valUser= User::firstWhere( 'name', $name);
                return response()->json(['user'=> $valUser, 'userbyId'=>$valId]);



            }catch(Exception $e){
                return response()->json(["error"=>$e->getMessage(), 'file'=>$e->getFile(), 'line'=>$e->getLine()]);
            }
         
    }
    public function FindName($id=0,$name=''){
        $valUser= User::where( 'name','like','%' .$name.'%')->first();
    
        return response()->json(['user'=> $valUser]);
    }
    public function viewPage($name=''){
        $valUser= User::where( 'name','like','%' .$name.'%')->first();
    
        return view('welcome', ['user' => $valUser]);
    }
}
