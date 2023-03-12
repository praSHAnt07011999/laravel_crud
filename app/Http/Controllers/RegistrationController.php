<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){

        // $request->validate(
        //     [
        //         'name'=> 'required',
        //         'email'=> 'required|email',
        //         'gender'=> 'required',
        //         'address'=> 'required',
        //         'dob'=> 'required',
        //         'password'=> 'required',
        //     ]
        //     );
        // echo "<pre>";
        // print_r($request->all());
        $student = new Student;
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->gender = $request['gender'];
        $student->address = $request['address'];
        $student->dob = $request['dob'];
        $student->password = md5($request['password']);
        $student->save();
    }
}
