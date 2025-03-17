<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Sophia',
            'email' => 'sophiabirbas@gmail.com',
            'password' => Hash::make('erjfhe78267sdfgusjdh%^&f21347*823kgy?234562bfeyr@#$%^23o4829ef6'),
        ]);
    }

}
