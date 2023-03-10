<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use App\Models\order;

class UserController extends Controller
{
    // function random(){
    //     echo Str::upper(Str::random(6));
    // }
    public function register(Request $req){
        $data= new User;
        $data->name=$req->name;
        $value=$req->name;
        $data->ph_no=$req->ph_no;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->district=$req->district;
        $data->blood_group=$req->blood_group;
        $data->password=$req->password;
        $result=$data->save();
        if($result>0){
            Mail::to($req->email)->send(new UserMail);
            return view('userRegistration');
        }
    }
    public function login(Request $req){
        $val=User::where(['email'=>$req->email,'password'=>$req->password])->first();
        // $data=User::where(['password'=>$req->password])->get();
        if($val){
            $req->session()->put('user',$val);
            return redirect('search');
        }
        else{
            echo "does't matched";
        }
    }
    public function order(Request $req){
        $data=new order;
        $id=Session()->get('user')['id'];
        $data->user_id=$id;
        $data->bank_id=$req->bank_id;
        $data->name=$req->name;
        $data->address=$req->address;
        $data->pin=$req->pin;
        $data->ph_no=$req->ph_no;
        $data->group=$req->group;
        $data->quantity=$req->quantity;
        $data->price=($req->quantity * 7);
        $result=$data->save();
        if($result>0){
            // $req->session('text','booking is done but not confirm');
            return view('search');
        }


    }
}
