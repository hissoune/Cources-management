<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticatedUsers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
           $user=User::where('email',$request->email)->first();
           if($user->blocked){
            return back()->with('error','this acount is blockrd !! ');
           }
        if (Auth::attempt($credentials)) {
            return redirect()->route('/'); 
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid credentials.']); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(){
        Auth::logout();

        return redirect('/');
    }
    public function destroy(string $id)
    {
       
    }
}
