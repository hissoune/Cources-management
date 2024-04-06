<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fillier extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
    ];
    public function Coureces(){
        return $this->hasMany(Course::class,'fillier_id');
     }
}
