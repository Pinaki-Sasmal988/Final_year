<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\bank_detail;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\ConfirmMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Session;

class BankController extends Controller
{
    public function store(Request $request){
        $data=new bank;
        $data->bank_name=$request->name;
        $data->bank_email=$request->email;
        $data->bank_ph_no=$request->contact;
        $data->Address=$request->address;
        $data->pin=$request->pin;
        $data->service_time=$request->serv_time;
        $data->reg_no=$request->reg_no;
        $data->owen_name=$request->owner_name;
        $data->owen_ph=$request->owner_ph;
        $data->category=$request->category;

         $image1=$request->owen_gov_id;
         $name1=$image1->getClientOriginalName();
         $image1->storeAs('public/images',$name1);
        $data->owen_gov_id=$name1;

        $image2=$request->bank_reg_id;
         $name2=$image2->getClientOriginalName();
         $image2->storeAs('public/images',$name2);
        $data->bank_reg_id=$name2;
        $data->password=$request->password;
        $result=$data->save();
        Mail::to($request->email)->send(new SendMail);
        if($result>0){
            $request->Session('message','Registered');
            return view('BankRegister');
        }else{
            $request->Session('message','Sorry');
            return view('BankRegister');
        }
        
    }
    public function fetch(){
        $data=bank::all();
        return view('admin',['values'=>$data]);
    }
    public function insert(Request $request){
        $data=new bank_detail;
        $data->bank_name=$request->bank_name;
        $data->bank_email=$request->bank_email;
        $data->bank_ph_no=$request->bank_ph_no;
        $data->Address=$request->address;
        $data->pin=$request->pin;
        $data->service_time=$request->service_time;
        $data->reg_no=$request->reg_no;
        $data->owen_name=$request->owen_name;
        $data->owen_ph=$request->owen_ph;
        $data->category=$request->category;
        $data->password=$request->password;
        $data->owen_gov_id=$request->owner_gov_id;
        $data->bank_reg_id=$request->bank_reg_id;
        $result=$data->save();
        Mail::to($request->bank_email)->send(new ConfirmMail);
        bank::destroy($request->id);
        if($result>0){
            $request->Session('message','Bank details verify Successfully');
            return redirect('admin');
        }else{
            $request->Session('message','Sorry');
            return redirect('admin');
        }

    }
    public function search(Request $req){
        if($req->isMethod("POST")){
            $search=$req->pin;
         $data=bank_detail::where("pin","LIKE","%". $search . "%")->get();
         return view("bankShow",["data"=>$data]);
           }
    }
     public function bankLogin(Request $req){
       $data=bank_detail::where(['bank_email'=>$req->email,'password'=>$req->password])->first();
       if($data){
        $req->session()->put('value',$data);
        return redirect('Dashboard');
       }else{
        echo "user Id or password does't matched";
       }
       
     } 
}
