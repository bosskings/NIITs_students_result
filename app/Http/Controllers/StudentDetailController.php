<?php

namespace App\Http\Controllers;

use App\Mail\sendStudentResult;
use App\Models\StudentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        // store student details in session for use 
        session(['STUDENTS' => $student]);

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

        $query = strtolower($request->input('query'));

        $students = StudentDetail::where(function ($q) use ($query) {
            $q->whereRaw('LOWER(first_name) LIKE ?', ["%$query%"])
            ->orWhereRaw('LOWER(middle_name) LIKE ?', ["%$query%"])
            ->orWhereRaw('LOWER(last_name) LIKE ?', ["%$query%"])
            ->orWhereRaw('LOWER(email) LIKE ?', ["%$query%"])
            ->orWhereRaw('LOWER(course) LIKE ?', ["%$query%"]);
        })->get();

        return response()->json($students);
        // returnview('encore.index', compact('students'));
    }




    // function to send email to students
    public function sendStudentsEmail(Request $request){

        $student = session('STUDENTS');
        error_log($student->email);

        $message = [
            'module'=>$request->module,
            'score'=>$request->score
        ];

        Mail::to($student->email)->send(new sendStudentResult($message));

    }



}
