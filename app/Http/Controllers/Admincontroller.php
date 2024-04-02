<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function add_description(Request $request , User $Teacher){
        $request->validate([
            'description'=>'required|string',
        ]);
        
        if($Teacher->description){
            $Teacher->update(['description'=> $request->description]);
            return back()->with('success','description updated succesfuly');
        }else{
            $Teacher->update(['description'=> $request->description]);
            return back()->with('success','description added succesfuly');
        }
        
    }
    public function profile(){
        $user=Auth::user();
       return view('profile',compact('user'));
    }
}
