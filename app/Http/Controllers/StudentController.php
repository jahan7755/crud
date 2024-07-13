<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
       
        $students = Student::all();

        return view('students.index',compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function save(Request $request){

        if($request->hasFile('photo')){

            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension();
            $filename = time().".".$extension;
            $photo->move('students/photo',$filename);
            $upload_photo = $filename;
        }

        Student::create([

            'photo'=>$upload_photo,
            'name'=>$request->name,
            'rollno'=>$request->rollno,
            'std'=>$request->std,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
        ]);

        return redirect('/admin/students')->with('primary','student added succeccfully');
        
    }

    public function update($id){

        $students = Student::findOrFail($id);

        return view('students.update',compact('students'));
    }

    public function UpdateData(Request $request,$id){

        $students = Student::findOrFail($id);
        $upload_photo = $students->photo;

        
        if($request->hasFile('photo')){

            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension();
            $filename = time().".".$extension;
            $photo->move('students/photo',$filename);
            $upload_photo = $filename;
        }

        $students->update([

            'photo'=>$upload_photo,
            'name'=>$request->name,
            'rollno'=>$request->rollno,
            'std'=>$request->std,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
        ]);

        return redirect('/admin/students')->with('success','student updated succeccfully');


    }

    public function delete($id){

        $students = Student::findOrFail($id);

        $students->delete();
        
        return redirect("/admin/students")->with("danger","Student deleted successfully");
    }
}
