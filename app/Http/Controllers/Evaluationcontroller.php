<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Evaluationcontroller extends Controller
{

    public function evaluate_student (User $student ){
        return view('teacher.students.evaluate',compact('student'));
    }
    public function evaluate_s(Request $request){
        $request->validate([
            'student_id' => 'required',
            'note' => 'required|string',
            'mark' => 'required|numeric|max:100',
        ]);
        try{
        Evaluation::create([
            'student_id'=>$request->student_id,
            'teacher_id'=>Auth::id(),
            'marke'=>$request->mark,
            'note'=>$request->note,
        ]);
        return redirect()->route('show_studentss')->with('success','evlauation done succesfuly');
    }catch(\Exception $e){
     return back()->with('error','you allredy evaluted this student');
    }
        
    }

    public function show_notes(){
        $evaluation=Evaluation::where('student_id',Auth::id())->get();
        return view('client.notes',compact('evaluation'));
    }
}
