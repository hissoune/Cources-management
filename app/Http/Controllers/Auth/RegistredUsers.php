<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistredUsers extends Controller
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
      return view('Auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'], 
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role'=>'required',
            
        ]);
        if($request->role == 'student'){
            $role='student';
        }else{
            $role='teacher';
        }
        
       
       $user=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        
       ]);
       auth()->login($user);
       $user->AssignRole($role);
       if($user->hasRole('student')){
        return redirect()->route('/');
       }elseif($user->hasRole('teacher')){
        return redirect()->route('teacher');
       }elseif($user->hasRole('director')){
        return redirect()->route('dasboard');
       }else{

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
    public function destroy(string $id)
    {
        //
    }
}
