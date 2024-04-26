<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Follow;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Evaluationcontroller extends Controller
{

    public function evaluate_student (User $student ){
        return view('teacher.students.evaluate',compact('student'));
    }
    public function evaluate_T(Request $request){
        $request->validate([
            'teacher_id' => 'required',
            'note' => 'required|string',
            'mark' => 'required|numeric|max:10',
        ]);
        try{
        Evaluation::create([
            'student_id'=>  Auth::id(),
            'teacher_id'=>$request->teacher_id,
            'marke'=>$request->mark,
            'note'=>$request->note,
        ]);
        return back()->with('success','evlauation done succesfuly');
    }catch(\Exception $e){
     return back()->with('error','you allredy evaluted this student');
    }
        
    }

    public function show_notes(){
        $evaluation=Evaluation::where('teacher_id',Auth::id())->get();
         return view('teacher.students.notes',compact('evaluation'));
    }
    public function follow(Request $request){
        $teacher_id=$request->input('teacher_id');
        Follow::create([
            'teacher_id'=>$teacher_id,
            'student_id'=>Auth::id(),
        ]);

        return back()->with('success','following success');
    }

    public function unfollow(Request $request){
        $Teacher_id=$request->input('teacher_id');
        $follow=Follow::where('teacher_id',$Teacher_id)->where('student_id',Auth::id())->first();
        $follow->delete();
        return back()->with('success','unfollowing success');
    }
    public function followers(){
        $followers=Follow::where('teacher_id',Auth::id())->get();
        return view('teacher.students.followers',compact('followers'));
    }
}
