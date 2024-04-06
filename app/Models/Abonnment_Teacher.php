<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnment_Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
'user_id',
'abonnment_id',
'number_cources',

    ];
}
