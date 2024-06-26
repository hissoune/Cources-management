<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'capacity',
    ];
    public function Cources(){
        return $this->hasMany(Course::class,'classes_id');
    }
}
