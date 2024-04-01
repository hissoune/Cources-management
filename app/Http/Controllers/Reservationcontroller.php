<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Reservationcontroller extends Controller
{
    public function reserve_espec(Course $cor) {
        try {
            $student = Auth::user();
            Reservation::create([
                'user_id' => $student->id,
                'cource_id' => $cor->id,
            ]);
             Mail::send('emails.reservation_asc', ['course' => $cor,'student'=>$student], function ($message) use ($student) {
                 $message->to($student->email)
                         ->subject('Reservation Confirmation');
             });
            return back()->with('success', 'Your reservation completed. Please check your email.');
        } catch (\Exception $e) {
           
            return back()->with('error', 'you allredy reserved this coure');
        }

       
    }
    public function show_reservation(){
        $Reservations=Reservation::where('accepted',false)->whereHas('Coureces',function($query){
            $query->whereHas('user',function($secquery){
                $secquery->where('id',Auth::id());
            });
        })->get();
        return view('teacher.reservations.index',compact('Reservations'));
    }
    public function accept_reservation(Reservation $item){
        $student=$item->user;
           $item->Coureces->decrement('avalable_seetes');
           $item->accepted=true;
           $item->save();
           Mail::send('emails.reservation_confirmed', ['course' => $item->Coureces,'student'=>$student], function ($message) use ($student) {
            $message->to($student->email)
                    ->subject('Reservation accepted');
        });
           return back()->with('success','the reservatrion accepted succesfuly');
    }
    public function refiouse_reservation(Reservation $item){
        $student=$item->user;
        Mail::send('emails.reservation_refioused', ['course' => $item->Coureces,'student'=>$student], function ($message) use ($student) {
            $message->to($student->email)
                    ->subject('Reservation refioused');
        });
        $item->delete();
        return back()->with('success','the reservatrion refioused succesfuly');

    }
    public function show_students(){
        $students=Reservation::where('accepted',true)->whereHas('Coureces',function($query){
            $query->where('date','<',now());
        })->get();
       return view('teacher.students.index',compact('students'));
    }
    
}
