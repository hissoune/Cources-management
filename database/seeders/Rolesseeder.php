<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Rolesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name'=>'director',
        ]);
        Role::create([
            'name'=>'teacher',
        ]);
        Role::create([
            'name'=>'student',
        ]);
    }
}
