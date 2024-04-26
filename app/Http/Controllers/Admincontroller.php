<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Fillier;
use App\Models\Abonnment;
use App\Models\Reservation;
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
    public function block(User $item){
        
        $item->update(['blocked'=>true]);
        return back()->with('success','blocked succesfuly');

    }
    public function UNblock(User $item){
        $item->update(['blocked'=>false]);
        return back()->with('success','UNblocked succesfuly');

    }

    public function teacher(){
        $Courses = Course::whereHas('user', function($query) {
            $query->where('id', Auth::id());
        })->get();
        $Reservations=Reservation::whereHas('Coureces',function($query){
            $query->whereHas('user',function($secquery){
                $secquery->where('id',Auth::id());
            });
        })->get();
        $students=Reservation::where('accepted',true)->whereHas('Coureces',function($query){
            $query->where('date','<',now());
        })->get();
        return view('teacher',compact('Courses','Reservations','students'));
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

    public function director_statistique(){
        $filliers = Fillier::all();
        $cources=Course::all();
        $Abonnments=Abonnment::all();
        $students=User::whereHas('roles',function($query){
            $query->where('name','student') ;
        })->get();
        $Teachers=User::whereHas('roles',function($query){
            $query->where('name','teacher') ;
        })->get();
        return view('director',compact('filliers','cources','Abonnments','students','Teachers'));

    }
}
