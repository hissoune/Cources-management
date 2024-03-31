<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Reservationcontroller extends Controller
{
    public function reserve_espec(Course $cor) {
        try {
            $student = Auth::user();
            Reservation::create([
                'user_id' => $student->id,
                'course_id' => $cor->id,
            ]);
            return back()->with('success', 'Your reservation completed. Please check your email.');
        } catch (\Exception $e) {
           
            return back()->with('error', 'you allredy reserved this coure');
        }
    }
    
}
