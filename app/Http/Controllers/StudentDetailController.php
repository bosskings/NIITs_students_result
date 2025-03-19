<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDetailController extends Controller
{

    // function to create a new student
    public function viewRegisteration(){
        return view('encore.registration') ;
    }

    // students profile
    public function studentsProf($id){
        echo $id;
        return view('encore.profile');
    }

    // function to create students via form
    public function createStudents(){
        return view('encore.registration');
    }

    // function to search for students profile
    public function searchStudents(){


    }



}
