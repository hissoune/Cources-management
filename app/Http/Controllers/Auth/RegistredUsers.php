<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordResetToken;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $validatedData= $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'], 
            'password' => ['required', 'string', 'min:8'],
            'role'=>'required',
            'image'=>'required',
            
        ]);
        if($request->role == 'student'){
            $role='student';
        }else{
            $role='teacher';
        }

        if($request->hasFile('image')){
            $validatedData['image']=$request->file('image')->store('user_image','public');
            
        } 
        
       
       $user=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'image'=>$validatedData['image'],
        
       ]);
       $user->AssignRole($role);
       $resetLink = route('verify_email',$user);
       $emailMessage = "Click the following link to verfy your email: {$resetLink}";
   
       Mail::raw($emailMessage, function ($message) use ($request) {
           $message->to($request->email)->subject('Email verification ');
       });
              return redirect()->route('verify_sent',$user);
          
      
    }

    public function verify_sent(User $user){
        return view('Auth.waiting_verify',compact('user'));
    }
          public function verify_email( User $user){
            $user->update(['email_verified_at'=>now()]);
            auth()->login($user);
           
            if($user->hasRole('student')){
             return redirect()->route('/');
            }elseif($user->hasRole('teacher')){
             return redirect()->route('teacher');
            }elseif($user->hasRole('director')){
             return redirect()->route('dasboard');
            }else{
     
            }
          }
          public function rsend_Email(User $user){
            $resetLink = route('verify_email',$user);
            $emailMessage = "Click the following link to reset your password: {$resetLink}";
        
            Mail::raw($emailMessage, function ($message) use ($user) {
                $message->to($user->email)->subject('Reset Your Password');
            });
                   return redirect()->route('verify_sent',$user);
          }
    public function forget_password(){
        return view('Auth.giv_email');
    }
   
public function send_Email(Request $request)
{
    $request->validate([
        'email' => ['required', 'string', 'email', 'exists:users'],
    ]);

    $token = Str::random(60); 

    PasswordResetToken::updateOrCreate(
        ['email' => $request->email],
        [
            'token' => $token,
            'created_at' => Carbon::now(),
        ]
    );

    $resetLink = route('reset-password', ['token' => $token]);
    $emailMessage = "Click the following link to reset your password: {$resetLink}";

    Mail::raw($emailMessage, function ($message) use ($request) {
        $message->to($request->email)->subject('Reset Your Password');
    });

    return back()->with('status', 'Password reset link has been sent to your email.');
}
    
public function reset_password($token)
{
    
    $passwordReset = PasswordResetToken::where('token', $token)->first();

    if (!$passwordReset) {
        return redirect()->route('login')->with('error', 'Invalid or expired password reset token.');
    }

    return view('Auth.password_resete', [
        'token' => $token,
        'email' => $passwordReset->email,
    ]);

}

public function reste_pass(Request $request){
   $vla=  $request->validate([
         'token'=>'required',
         'email'=>'required',
         'password'=>'required',
         'confrime_password'=>'required|same:password',
     ]);

     $passwordReset = PasswordResetToken::where('email', $request->email)
     ->where('token', $request->token)
     ->first();
     if (!$passwordReset) {
        return redirect()->route('login')->with('error', 'Invalid password reset token.');
    }
    $user = User::where('email', $request->email)->first();
    $user->update(['password' => Hash::make($request->password)]);
     $passwordReset->delete();
     return redirect()->route('login')->with('status', 'Your password has been reset successfully.');

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
