<?php

namespace App\Http\Controllers;

use App\Mail\SendOtpMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Type\Integer;

class ForgotPasswordController extends Controller
{
     //  $otp="";
    //  public function __constructor(){
    //     $this->$otp=rand(10000,99999);
    //    }
   function forgotPassword(Request $req){
      //$otp=rand(10000,99999);
      //echo $otp;
      //echo $req->email;
      Mail::to($req->email)->send(new SendOtpMail);
      return view('putOtp');
    }
//    public function otpVerify(Request $req){
//      if($otp==$req->otp){

//      }
   
}

