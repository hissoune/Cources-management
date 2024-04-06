<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'cource_id',
        'accepted',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Coureces(){
        return $this->belongsTo(Course::class,'cource_id');
     }
}
