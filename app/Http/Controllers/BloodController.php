<?php

namespace App\Http\Controllers;

use App\Models\blood_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class BloodController extends Controller
{
    public function bloodDetails(Request $req){
     $data=new blood_detail;
     $data->bank_id=$req->bank_id;
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
        return redirect('Dashboard');
     }

    }
    public function bloodStock(){
        $id=session()->get('value')['bank_id'];
     $data=DB::table('bank_details')->join('blood_details','bank_details.bank_id','=','blood_details.bank_id')
       ->where('bank_details.bank_id','=',$id)->select('*')->get();
      return view("Bloodstock",["data"=>$data]);
    
    }
    public function viewDetails($id){

      $data=DB::table('bank_details')->join('blood_details','bank_details.bank_id','=','blood_details.bank_id')
      ->where('bank_details.bank_id','=',$id)->select('*')->get();
      return view('viewDetails',["data"=>$data]);
    }
    public function booknow($id){
      //$data=User::find($id);
      return view('booknow',['id'=>$id]);
    }
    public function stockUpdate(Request $req){ 
          //$id=session()->get('value')['bank_id'];
          $blood_id=$req->blood_id;
          //  $data=DB::table('bank_details')->join('blood_details','bank_details.bank_id','=','blood_details.bank_id')
          //  ->where('bank_details.bank_id','=',$req->bank_id)->get();
           //echo $data;
          // foreach($data as $item){
          //   echo $item->blood_id;
          //   $values=blood_detail::find(1);
          // }
         $values=blood_detail::find('blood_id',$blood_id);
         echo $values;
         //echo $values;
          //  $val=$req->bloodgroup;

          //  $values->$val=$req->unit;
          //  $result=$values->save();
          
          // if($result){
          //  return redirect('bloodstock');
          // }else{
          //   echo "sorry";
          // }
    }

    public function showOrder(){
      $id=session()->get('value')['bank_id'];
   $data=DB::table('bank_details')->join('orders','bank_details.bank_id','=','orders.bank_id')
     ->where('bank_details.bank_id','=',$id)->select('*')->get();
    return view("showorder",["data"=>$data]);
      
   }
}
