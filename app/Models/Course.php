<?php

namespace App\Models;

use App\Models\User;
use App\Models\Classe;
use App\Models\Fillier;
use App\Models\Reservation;
use App\Models\classes_courses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
  protected $fillable=[
    'name',
    'description',
    'image',
    'fillier_id',
    'date',
    'price',
    'avalable_seetes',
    'users_id',
    'start_time',
    'end_time',
    'classes_id',

  ];

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function classe(){
        return $this->belongsTo(Classe::class,'classes_id');
    }
    public function Fillier(){
        return $this->belongsTo(Fillier::class,'fillier_id');
    }
    public function Reservations(){
      return $this->hasMany(Reservation::class,'cource_id');
   }
//     public function classe()
// {
//     return $this->belongsToMany(Classe::class, 'classes_courses', 'courses_id', 'classes_id')->using(classes_courses::class);
// }

}
