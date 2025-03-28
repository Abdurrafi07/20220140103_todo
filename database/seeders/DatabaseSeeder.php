<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // Kosongkan tabel users dan reset auto increment
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // DB::table('users')->truncate();
        // DB::table('todos')->truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // // Buat satu user dengan namamu
        // User::factory()->create([
        //     'name' => 'Abdurrafi Nur Fakhruddin', // Ganti dengan namamu
        //     'email' => 'abdurrafinurfakh07@gmail.com', // Bisa ganti sesuai kebutuhan
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        //     'is_admin' => true,
        // ]);

        // Buat user admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'is_admin' => true,
        ]);

        // Generate 100 user tambahan
        User::factory(99)->create();

        // Generate 501 todo
        Todo::factory(501)->create();
    }
}