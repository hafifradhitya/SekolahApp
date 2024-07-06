<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Student;

class AuthController extends Controller
{
    //
    public function login(Request $request) {
        $data = [
            'nisn' => $request->nisn,
            'password' => $request->password
        ];

        $student = Student::where('nisn', $data['nisn'])->first();

        if(!empty($student)){

            if(Hash::check($request->password, $student->password)){
                $output = [
                    'url' => url('student/dashboard'),
                    'success' => true
                ];
                session([
                    'name' => $student->name,
                    'email' => $student->email,
                    'isstudent' => true
                ]);
            }else{
                $output=[
                    'message' => 'Email atau Password Salah',
                    'success' => false
                ];
            }
        }else{
            $output=[
                'message' => 'Email atau Password Salah',
                'success' => false
            ];
        }
        return response()->json($output);
    }

    public function logout(){
        Auth::logout();
        session()->forget(['name', 'email', 'isstudent']);
        return redirect('/');
    }
}
