<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Follow;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use App\Models\model_has_role;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'description',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'model_has_roles', 'users_id', 'roles_id');
    }
    
    // public function sendEmailVerificationNotification()
    // {
    //     Mail::to($this->email)->send(new VerifyEmail($this));
    // }
    
public function hasVerifiedEmail(){
    if($this->email_verified_at){
        return true;
    }else{
        return false;
    }
}
    public function AssignRole($role){
        $roles= Role::where('name',$role)->first();
        model_has_role::create([
            'roles_id'=>$roles->id,
            'users_id'=>$this->id,
         ]);
     }
     public function hasRole($role){
         $roles= Role::where('name',$role)->first();
        $hasrole= model_has_role::where('roles_id',$roles->id)->where('users_id',$this->id)->first();
        if($hasrole){
         return true;
        }else{
         return false;
        }
         }
 
         public function removeRoles(){
             $hasrole= model_has_role::where('users_id',$this->id)->first();
             $hasrole->delete();
         }

         public function Coureces(){
            return $this->hasMany(Course::class,'users_id');
         }
         public function followers(){
            return $this->hasMany(Follow::class,'teacher_id');
        }
        public function reservations(){
            return $this->hasMany(Reservation::class,'user_id');
         }

        }

