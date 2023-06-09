<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addDoctorView(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        
        $doctor = new Doctor;
        if($request->file){$image = $request->file;
        $imageName = time().'.'.$image->getClientoriginalExtention();
        $request->file->move('doctor-image', $imageName);
        $doctor->image = $imageName; 
        }else {
            $doctor->image = null;
        }
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfully');

    }
}


