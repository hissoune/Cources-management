<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Fillier;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return view('client.welcome');
    }

    public function about(){
        return view('client.whowear');
    }
    public function courcess(){
        $Course=Course::all();
        return view('client.courcess',compact('Course'));
    }
    public function teacheres(){
        $Teachers=User::whereHas('roles',function($query){
            $query->where('name','teacher') ;
        })->get();
        return view('client.teacheres',compact('Teachers'));
    }
    public function teacheres_profile(User $Teacher){
        return view('client.techer_profile',compact('Teacher'));
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
}
