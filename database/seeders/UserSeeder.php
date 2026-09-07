<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->admin()->create([
            'name' => 'Sean',
            'email' => 'test1@example.com'
        ]);
        User::factory()->admin()->create([
            'name' => 'Bob',
            'email' => 'test2@example.com'
        ]);
        User::factory()->employee()->create([
            'name' => 'Senna',
            'email' => 'test3@example.com'
        ]);
        User::factory()->employee()->create([
            'name' => 'Davy',
            'email' => 'test4@example.com'
        ]);
        User::factory()->employee()->create([
            'name' => 'Richard',
            'email' => 'test5@example.com'
        ]);
        User::factory()->customer()->create([
            'name' => 'Lisa',
            'email' => 'test6@example.com'
        ]);
        User::factory()->customer()->create([
            'name' => 'Douwina',
            'email' => 'test7@example.com'
        ]);
        User::factory()->customer()->create([
            'name' => 'Bas',
            'email' => 'test8@example.com'
        ]);
        User::factory()->customer()->create([
            'name' => 'Talitha',
            'email' => 'test9@example.com'
        ]);
        User::factory()->customer()->create([
            'name' => 'Jasper',
            'email' => 'test10@example.com'
        ]);
    }
}
