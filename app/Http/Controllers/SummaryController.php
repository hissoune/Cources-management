<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function Resume_teacher(Course $item){
        return view('teacher.Resume',compact('item'));
        
    }
}
