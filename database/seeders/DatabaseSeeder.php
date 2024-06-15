<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Директор',
            'email' => 'director@example.com',
            'level' => 3,
        ]);

        User::factory()->create([
            'name' => 'Руководитель',
            'email' => 'cto@example.com',
            'level' => 2,
        ]);

        User::factory()->create([
            'name' => 'Работник',
            'email' => 'worker@example.com',
            'level' => 1,
        ]);

        $driver1 = new Driver();
        $driver1->name = 'Водитель 1';
        $driver1->save();

        $driver2 = new Driver();
        $driver2->name = 'Водитель 2';
        $driver2->save();

        $driver3 = new Driver();
        $driver3->name = 'Водитель 3';
        $driver3->save();
    }
}
