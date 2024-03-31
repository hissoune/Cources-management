<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_has_role extends Model
{
    use HasFactory;
    protected $fillable=[
        'roles_id',
        'users_id',
    ];
}
