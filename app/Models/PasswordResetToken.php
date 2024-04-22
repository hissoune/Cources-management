<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    use HasFactory;
    protected $table='password_reset_tokens';
    protected $fillable=[
        'email',
        'token',
        'created_at',
    ];
    protected $primaryKey = 'email'; // Specify the primary key column

    public $incrementing = false; // Set to false if the primary key is not auto-incrementing
    public $timestamps = false; // Assuming no created_at and updated_at columns
   


}
