<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\bank_detail;
use Illuminate\Http\Request;

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
        $data->owen_name=$request->owener_name;
        $data->owen_ph=$request->owener_ph;

         $image1=$request->owen_gov_id;
         $name1=$image1->getClientOriginalName();
         $image1->storeAs('public/images',$name1);
        $data->owen_gov_id=$name1;

        $image2=$request->bank_reg_id;
         $name2=$image2->getClientOriginalName();
         $image2->storeAs('public/images',$name2);
        $data->bank_reg_id=$name2;
        $data->password=$request->password;
        $data->save();
        return "Data Inserted";
        
    }
    public function fetch(){
        $data=bank::all();
        return view('admin',['values'=>$data]);
    }
    public function insert(Request $request){
        $data=new bank_detail;
        $data->bank_name=$request->name;
        $data->bank_email=$request->email;
        $data->bank_ph_no=$request->contact;
        $data->Address=$request->address;
        $data->pin=$request->pin;
        $data->service_time=$request->serv_time;
        $data->reg_no=$request->reg_no;
        $data->owen_name=$request->owener_name;
        $data->owen_ph=$request->owener_ph;
        $data->password=$request->password;
        $data->owen_gov_id=$request->owen_gov_id;
        $data->bank_reg_id=$request->bank_reg_id;
        $data->save();

    }
}
