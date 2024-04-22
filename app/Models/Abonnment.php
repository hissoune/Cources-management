<?php

namespace App\Models;
use App\Models\Abonnment_Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Abonnment extends Model
{
    use HasFactory;
    protected $fillable=[
        'type',
        'number_cources',
        'price',
        'number_days',
    ];

    public function Abonnment_resever($id){
       $Abonnment_resever= Abonnment_Teacher::where('user_id',Auth::id())->where('abonnment_id',$id)->first();
       return $Abonnment_resever;
    }

    public function abonment_reserved(){
        return $this->hasMany(Abonnment_Teacher::class,'abonnment_id');
    }
}
