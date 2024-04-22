<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Follow;
use App\Models\Fillier;
use App\Models\Abonnment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function index(){
        $cources=Course::where('date','>',now())->orderBy('created_at','desc')->limit(4)->get();
        $filliers = Fillier::withCount('Coureces')
        ->having('coureces_count', '>', 0) 
        ->orderByDesc('coureces_count')
        ->limit(4)
        ->get();
        $Teachers=User::whereHas('roles',function($query){
            $query->where('name','teacher') ;
        })->withCount('followers')
        ->having('followers_count', '>', 0) 
        ->orderByDesc('followers_count')->get();
        
        return view('client.welcome',compact('cources','filliers','Teachers'));
    }

    public function about(){
        return view('client.whowear');
    }
    public function courcess(){
        $Course=Course::where('accepted',true)->get();
        $filliers = Fillier::withCount('Coureces')
        ->having('coureces_count', '>', 0) 
        ->orderByDesc('coureces_count')
        
        ->get();
        return view('client.courcess',compact('Course','filliers'));
    }
    public function teacheres(){
        $Teachers=User::whereHas('roles',function($query){
            $query->where('name','teacher') ;
        })->get();
        return view('client.teacheres',compact('Teachers'));
    }
    public function teacheres_profile(User $Teacher){
        $follow=Follow::where('teacher_id',$Teacher->id)->where('student_id',Auth::id())->first();

        return view('client.techer_profile',compact('Teacher','follow'));
    }

    public function filliers(){
        $filliers=Fillier::all();
        return view('client.filliers',compact('filliers'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchInput');
        $searchResults = Course::where('name', 'like', '%' . $searchTerm . '%')->get();
        return response()->json($searchResults);
    }

    public function cource_details(Course $cor){
        return view('client.cource_details',compact('cor'));
    }

    public function search_details(Request $request){
        $cor=Course::find($request->input('cource'));
        return view('client.cource_details',compact('cor'));
    }
    public function fillter_fillier(Fillier $item){
        $Course=Course::where('fillier_id',$item->id)->get();
        $filliers = Fillier::withCount('Coureces')
        ->having('coureces_count', '>', 0) 
        ->orderByDesc('coureces_count')
        ->get();
        return view('client.courcess',compact('Course','filliers'));

    }

   
}
