<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function index($id){
       
        $name = "Donal Trump";
        $age = "75";
        $data = [
            "name"  => $name,
            "age"   => $age,
            "id"    => $id,
        ];
        $name="access_token";
        $value="123-XYZ";
        $expTime=1;
        $path="/profile/3";
        $domain=$_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;
        return response()->json([
            "message" => "Cookie set successfully",
            "data" => $data
        ],200)->cookie(
             $name,$value,$expTime,$path,$domain,$secure,$httpOnly
        );
        
    }


    public function demo_action(Request $request):int{
        $num1   = $request->num1;
        $num2    = $request->num2;
        $sum    = $num1 + $num2 ;
        Log::info($sum);
        Log::emergency($sum);
        Log::alert($sum);
        Log::critical($sum);
        Log::error($sum);
        Log::warning($sum);
        Log::notice($sum);
        Log::debug($sum);
        return $sum ;
    }

    public function sessionPut(Request $request):bool{
        $email = $request->email;
        $request->session()->put('email' , $email) ;
        return true;
    }

    public function sessionPull(Request $request):string{
      
        return $request->session()->pull('email') ;
        
    }
    public function sessionForget(Request $request):bool{
      
         $request->session()->forget('email') ;
         return true ;
    }
    public function sessionFlush(Request $request):bool{
      
         $request->session()->flush() ;
         return true ;
    }

}
