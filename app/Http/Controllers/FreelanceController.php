<?php

namespace App\Http\Controllers;

use App\Models\freeModel;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    // public function index(){
    //     $FreelanceModel = new FreelanceController();
    //     return view('index')-> with('content', $FreelanceModel-> index());
        
    // }
    public function push(Request $request){
        dd($request->all());
        $request->validate([
            'fullName'=>'required',
            'email'=>'required',
            'phoneNumber'=>'required',
            'message'=>'required',
        ]);
        $fullName = $request->fullName;
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;
        $message = $request->message;
        
        $data =  new freeModel();
        $data->fullName=$fullName;
        $data->emailaddress=$email;
        $data->phoneNumber=$phoneNumber;
        $data->message=$message;
        $data->save();
    }
}



   