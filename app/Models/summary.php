<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class summary extends Model
{
    use HasFactory;

    protected $fillable=[
        'cource_id',
        'part1',
        'desc1',
        'part2',
        'desc2',
        'part3',
        'desc3',
        
    ];

    public function Cource(){
        return $this->belongsTo(Course::class,'cource_id');
    }
}
