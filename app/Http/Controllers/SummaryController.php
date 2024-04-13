<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\summary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SummaryController extends Controller
{
    public function Resume_teacher(Course $item){
        return view('teacher.Resume',compact('item'));
        
    }
    public function Add_resume(Request $request){
       
  $request->validate([
        'part1' => 'required|string|max:255', 
        'desc1' => 'required|string|max:1000', 
        'part2' => 'required|string|max:255', 
        'desc2' => 'required|string|max:1000', 
        'part3' => 'required|string|max:255', 
        'desc3' => 'required|string|max:1000',
        'cource_id'=>'required',
    ]);
    $cource=Course::find($request->cource_id);
    
          try{
            summary::create([
                'part1'=>$request->part1,
                'desc1'=>$request->desc1,
                'part2'=>$request->part2,
                'desc2'=>$request->desc2,
                'part3'=>$request->part3,
                'desc3'=>$request->desc3,
                'cource_id'=>$request->cource_id,
            ]);
            foreach( $cource->Reservations as $user){
                $student=$user->user;
                Mail::send('emails.resume_ADED', ['course' => $cource, 'student' => $student], function ($message) use ($student) {
                    $message->to($student->email)
                            ->subject('RESUME ADDED');
                });
            }
            return redirect()->route('Courses.index')->with('success','the resume of cource added succesfuly');
          }catch(\Exception $e){
            return back()->with('error','there is something wrong');
          }
    }

    public function update_resume(Request $request,summary $resume){
        $request->validate([
            'part1' => 'required|string|max:255', 
            'desc1' => 'required|string|max:1000', 
            'part2' => 'required|string|max:255', 
            'desc2' => 'required|string|max:1000', 
            'part3' => 'required|string|max:255', 
            'desc3' => 'required|string|max:1000',
            'cource_id'=>'required',
        ]);
        $cource=Course::find($request->cource_id);
       
        try{
            $resume->update([
                'part1'=>$request->part1,
                'desc1'=>$request->desc1,
                'part2'=>$request->part2,
                'desc2'=>$request->desc2,
                'part3'=>$request->part3,
                'desc3'=>$request->desc3,
                'cource_id'=>$request->cource_id,
            ]);
            foreach( $cource->Reservations as $user){
                $student=$user->user;
                Mail::send('emails.resume_update', ['course' => $cource, 'student' => $student], function ($message) use ($student) {
                    $message->to($student->email)
                            ->subject('RESUME UPDATED');
                });
            }
            return redirect()->route('Courses.index')->with('success','the resume of cource updated succesfuly');
          }catch(\Exception $e){
            return back()->with('error','there is something wrong');
          }
    }

   public function Resume(Course $cor){
    $Resum=$cor->Resume;
    return view('client.Resume',compact('Resum'));
   }
}
