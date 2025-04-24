<?php

namespace App\Http\Controllers;

use App\Models\StudentDetail;
use Illuminate\Http\Request;

class StudentDetailController extends Controller
{

    // function to view create a new student form
    public function viewRegistration(){
        
        return view('encore.registration') ;
    }

    // students profile
    public function studentsProfile($id){
        
        // use id to get matching records from DB
        $student = StudentDetail::findOrFail($id);
        
        // error_log($student);

        return view('encore.student', ['student'=>$student]);
    }



    // function to create students via form
    public function createStudents(){

        $students = new StudentDetail();
        
        $students->first_name = request('firstName');
        $students->middle_name = request('middleName');
        $students->last_name = request('lastName');
        $students->email = request('email');
        $students->course = request('program');
        $students->phone = request('phone');
        $students->reg_no = request('regNo');
        $students->batch_no = request('batchNo');
        

        $students->save();

    }




    // function to search for students profile
    public function searchStudents(Request $request){

        $query = $request->input('query');

        $students = StudentDetail::whereRaw("MATCH(first_name, middle_name, last_name, email, course) AGAINST(? IN BOOLEAN MODE)", [$query])->get();

            
        return response()->json($students); 
        // returnview('encore.index', compact('students'));
    }



}
