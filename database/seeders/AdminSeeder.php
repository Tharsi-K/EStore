<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tharsini',
            'email' => 'ktharsini06@gmail.com',
            'gender' => 'fm',
            'address' => 'Jaffna',
            'mobile' => 740895718,
            'role' => 'admin',
            'password' => Hash::make('test123'),            
            'remember_token' => Str::random(10), 
        ]);
    }
}
