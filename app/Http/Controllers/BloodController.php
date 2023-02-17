<?php

namespace App\Http\Controllers;

use App\Models\blood_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BloodController extends Controller
{
    public function bloodDetails(Request $req){
     $data=new blood_detail;
     $data->id=$req->id;
     $data->APOS=$req->APOS;
     $data->BPOS=$req->BPOS;
     $data->OPOS=$req->OPOS;
     $data->ABPOS=$req->ABPOS;
     $data->ANEG=$req->ANEG;
     $data->BNEG=$req->BNEG;
     $data->ONEG=$req->ONEG;
     $data->ABNEG=$req->ABNEG;
     $data->message=$req->message;
     $result=$data->save();
     if($result>0){
        $req->session('message','Successfully Insert');
        return view('Dashboard');
     }

    }
    public function bloodStock(){
        $id=session()->get('value')['id'];
     $data=DB::table('bank_details')->join('blood_details','bank_details.id','=','blood_details.id')
       ->where('bank_details.id','=',$id)->select('*')->get();
     return view("Bloodstock",["data"=>$data]);
    }
    public function viewDetails($id){

      $data=DB::table('bank_details')->join('blood_details','bank_details.id','=','blood_details.id')
      ->where('bank_details.id','=',$id)->select('*')->get();
      return view('viewDetails',["data"=>$data]);
    }
    public function booknow($id){
      return view('booknow',['id'=>$id]);
    }
}
