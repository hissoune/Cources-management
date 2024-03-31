<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Course;
use App\Models\Fillier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       

       
$Courses = Course::whereHas('user', function($query) {
    $query->where('id', Auth::id());
})->get();
        return view('teacher.Courses.index',compact('Courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filliers=Fillier::all();
        $classes=Classe::all();
        return view('teacher.Courses.create',compact('filliers','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image'=>'required',
            'price'=>'required',
            'date' => 'required|after:'.now(),
            'start_time' => 'required|after:'.now(),
            'end_time' => 'required|after:start_time',
            'fillier_id' => 'required|exists:filliers,id',
            'classes_id' => 'required|exists:classes,id',
        ]);
            
        $exsist=Course::where('start_time',$request->start_time)
                        ->where('date',$request->date)
                        ->where('end_time',$request->end_time)
                        ->where('classes_id',$request->classes_id)
                        ->where('start_time','<=',$request->start_time,'<=','end_time')
                        ->where('start_time','<=',$request->end_time,'<=','end_time')->first();
      if($exsist != null){
        return redirect()->back()->with('error','this classe alredy reserved in this time');

      }else{
                
              
               if($request->hasFile('image')){
                $validatedData['image']=$request->file('image')->store('Courses','public');
                
            }   
            $classe=Classe::find($request->input('classes_id'));
            Course::create([
                'name' =>$request->name ,
                'description' => $request->description,
                'image'=>$validatedData['image'],
                'fillier_id' => $request->fillier_id, 
                'classes_id'=>$request->classes_id,
                'date'=>$request->date,
                'price'=>$request->price,
                'avalable_seetes'=>$classe->capacity,
                'start_time'=>$request->start_time,
                'end_time'=>$request->end_time,
                'users_id'=>Auth::id()
               ]);
             
               return redirect()->route('Courses.index')->with('success','your cours and classe reserved succesfuly');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $Course)
    {
        $filliers=Fillier::all();
        $classes=Classe::all();
        return view('teacher.Courses.Edit',compact('filliers','classes','Course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $Course)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price'=>'required',
            'image'=>'required',
            'date' => 'required|after:'.now(),
            'start_time' => 'required|after:'.now(),
            'end_time' => 'required|after:start_time',
            'fillier_id' => 'required|exists:filliers,id',
            'classes_id' => 'required|exists:classes,id',
        ]);
        $exsist=Course::where('start_time',$request->start_time)
                        ->where('end_time',$request->end_time)
                        ->where('classes_id',$request->classes_id)
                        ->where('date',$request->date)
                        ->where('id','!=',$Course->id)
                        ->where('start_time','<=',$request->start_time,'<=','end_time')
                        ->where('start_time','<=',$request->end_time,'<=','end_time')->first();
      if($exsist != null){
        return redirect()->back()->with('error','this classe alredy reserved in this time');
      }
        if($request->hasFile('image')){
            $validatedData['image']=$request->file('image')->store('Courses','public');
            
        } else{
            $validatedData['image']=$request->input('image');
        }  
             $classe=Classe::find($request->input('classes_id'));
        $Course->update([
            'name' =>$request->name ,
            'description' => $request->description,
            'image'=>$validatedData['image'],
            'price'=>$request->price,
            'fillier_id' => $request->fillier_id, 
            'classes_id'=>$request->classes_id,
            'date'=>$request->date,
            'start_time'=>$request->start_time,
            'avalable_seetes'=>$classe->capacity-$Course->Reservations->count(),
            'end_time'=>$request->end_time,
            'users_id'=>Auth::id()
           ]);
         
           return redirect()->route('Courses.index')->with('success','your cours and classe updated succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $Course)
    {
        $Course->delete();
        return redirect()->route('Courses.index')->with('success','your cours deleted succesfuly');

    }
}
