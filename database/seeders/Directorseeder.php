<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Directorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'Director',
            'email'=>'Director@gmail.com',
            'password'=>'password',
            'image'=>'public/Courses\1w4LPl8tYBou3ihcbeaNccMl0x5UWtsdjHGTCFbq.webp',
            'email_verified_at'=>now(),    
           ]);
           $user->AssignRole('director');
    }
}
