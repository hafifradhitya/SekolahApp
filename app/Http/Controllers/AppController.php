<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function student(){
        // var_dump(session('isstudent'));
        return view('student.dashboard');
    }

    public function teacher(){
        return view('teacher.dashboard');
    }

    public function Auth(){
        return view('Auth.login');
    }
}
