<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_id',
        'teacher_id',
       
    ];

    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id');
    }
}
