<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function show_students(){
        $students=User::whereHas('roles',function($query){
            $query->where('name','student') ;
        })->get();
        // dd($students);
        return view('director.students',compact('students'));
    }

    public function show_teachers(){
        $Teachers=User::whereHas('roles',function($query){
            $query->where('name','teacher') ;
        })->get();
       
        return view('director.teachers',compact('Teachers'));
    }
}
