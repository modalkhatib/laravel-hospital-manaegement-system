<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->user_type=='0'){

                $doctors = Doctor::all();
                return view('user.home', compact('doctors'));
            }
            else 
            {
                return view('admin.home');
            }
        }
        else 
        {
            return redirect()->back();
        }
    }

    public function index(){
        $doctors = Doctor::all();

        return view('user.home', compact('doctors'));
    }

    public function appointment(Request $request){
        $data = new Appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';
        if(Auth::id()){
        $data->user_id = Auth::user()->id;  
        }
        $data->save();

        
    }
}
