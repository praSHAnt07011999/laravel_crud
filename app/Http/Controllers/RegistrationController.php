<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegistrationController extends Controller
{
    public function index(){
        $title = "Student Registration";
        $url = '/students';
        $data = compact('title', 'url');
        return view('form')->with($data);
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

        return redirect('/students');
    }

    public function view(Request $request){
        $students = Student::all();
        $data = compact('students');
        return view('student_view')->with($data);
    }

    public function delete($id){
        $student = Student::find($id);
        if(!is_null($student)){
            $student->delete();
        }
        return redirect()->back();
    }

    public function edit($id){
        $student = Student::find($id);
        if(is_null($student)){
            return redirect('students');
        }
        else{
            $title = "Update Student";
            $url = 'students/update' ."/". $id;
            $data = compact('student', 'title', 'url');
            return view('form')->with($data);
        }
    }

    public function update($id, Request $request){
        $student = Student::find($id);
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->gender = $request['gender'];
        $student->address = $request['address'];
        $student->dob = $request['dob'];
        $student->password = $request['password'];
        $student->save();
        return redirect('student');
    }
}
