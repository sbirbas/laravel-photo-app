<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            'id' => '1',
            'description' => Str::random(10),
        ]);
    }
}
