<?php

namespace App\Http\Controllers;

use App\Mail\sendStudentResult;
use App\Models\StudentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class StudentDetailController extends Controller
{
    // function to view create a new student form
    public function viewRegistration(){
        
        return view('encore.registration') ;
    }



    // page to return view for entire students in a batch

    public function viewBatch($id){

        $students = StudentDetail::where('batch_no', $id )->get(); 

        return view('encore.batch', ['students' => $students]);
    }


    // send emails to everyone in a batch

    public function sendBatchEmail(){

        // get batch id and course
        $batchCode = request('batch');
        $course = request('course');


        // get the emails of everyone in said batch via batch code
        $email = StudentDetail::where('batch_no', $batchCode)->pluck('email')->toArray();


        //same time get the scores inputted from the form
        $scores = request('score');
        
        
        // iteratively send all users their scores
        $notSentEmails = [];
        for ($i=0; $i < count($email); $i++) { 
            
            $message = [
                'module'=>$course,
                'score'=>$scores[$i]
            ];
            
            try {
                Mail::to($email[$i])->send(new sendStudentResult($message));
            
            } catch (\Exception $e) {
            
                array_push($notSentEmails, $email[$i]);
                
            }
        }

        // show emails not sent, else display success message
        if (count($notSentEmails)>0) {
            return back()->with('error', $notSentEmails);
        }else{
            return back()->with('success', "All Emails sent");
        }
        

    }



    // students profile
    public function studentsProfile($id){
        
        // use id to get matching records from DB
        $student = StudentDetail::findOrFail($id);
        

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

        $students->guardians_phone = request('guardianPhone');
        $students->date_of_birth = request('dob');
        $students->state_of_birth = request('pob');
        $students->educational_qualification = request('educationalQualification');
        $students->state_of_origin = request('stateOfOrigin');
        $students->gender = request('gender');
        $students->lga = request('lga');

        $students->course = request('program');
        $students->phone = request('phone');
        $students->reg_no = request('regNo');
        $students->batch_no = request('batchNo');


        // for picture upload
        
        $data = request('snapshot');
        

        // Extract base64 data
        preg_match("/^data:image\/(png|jpeg);base64,/", $data, $matches);
        $imageType = $matches[1] ?? 'png';
        $data = preg_replace('/^data:image\/\w+;base64,/', '', $data);
        $data = str_replace(' ', '+', $data);
        $imageData = base64_decode($data);

        $filename = 'snapshot_' . time() . '.' . $imageType;
        Storage::put("public/uploads/{$filename}", '$imageData');


        return;
        
        if ($students->save()) {
            return redirect()->back()->with('success', 'Details saved successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to save details.');
        }
    }




    // function to search for students profile
    public function searchStudents(Request $request){
        
        $query = strtolower($request->input('query'));
        
        // check if the search string matches batch number first, before checking others
        $students = StudentDetail::where('batch_no', $query )->get(); 
        
        if( count($students) <1 ){
            
            $students = StudentDetail::where(function ($q) use ($query) {
                $q->whereRaw('LOWER(first_name) LIKE ?', ["%$query%"])
                ->orWhereRaw('LOWER(middle_name) LIKE ?', ["%$query%"])
                ->orWhereRaw('LOWER(last_name) LIKE ?', ["%$query%"])
                ->orWhereRaw('LOWER(email) LIKE ?', ["%$query%"])
                ->orWhereRaw('LOWER(course) LIKE ?', ["%$query%"]);
            })->get();
        
            
            return response()->json($students);
            
        }else{

            $students[0]->type ='batch';
            return response($students[0]);


        }


    }




    // function to send email to students
    public function sendStudentsEmail(Request $request){

        $student = session('STUDENTS');
        // error_log($student->email);

        $message = [
            'module'=>$request->module,
            'score'=>$request->score
        ];

        // check if email was sent

        
        try {
            
            Mail::to($student->email)->send(new sendStudentResult($message));

            return back()->with('success', 'Email sent successfully!');

        } catch (\Exception $e) {
            return back()->with('error', $e);
        }

    }


}
