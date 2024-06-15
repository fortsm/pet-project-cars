<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Category;
use App\Models\Driver;
use App\Models\Trip;
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
            'password' => '123',
        ]);

        User::factory()->create([
            'name' => 'Руководитель',
            'email' => 'cto@example.com',
            'level' => 2,
            'password' => '123',
        ]);

        User::factory()->create([
            'name' => 'Работник',
            'email' => 'worker@example.com',
            'level' => 1,
            'password' => '123',
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

        $category1 = new Category();
        $category1->name = 'Люкс';
        $category1->save();

        $category2 = new Category();
        $category2->name = 'Комфорт';
        $category2->save();

        $category3 = new Category();
        $category3->name = 'Эконом';
        $category3->save();

        $user1 = User::find(1);
        $user1->categories()->sync([1, 2, 3]);

        $user2 = User::find(2);
        $user2->categories()->sync([2, 3]);

        $user3 = User::find(3);
        $user3->categories()->sync([3]);

        $car1 = new Car();
        $car1->name = 'Машина директора';
        $car1->model = 'Tesla Model S';
        $car1->category_id = 1;
        $car1->driver_id = 1;
        $car1->save();

        $car2 = new Car();
        $car2->name = 'Машина руководителя';
        $car2->model = 'Haval F7X';
        $car2->category_id = 2;
        $car2->driver_id = 2;
        $car2->save();

        $car3 = new Car();
        $car3->name = 'Машина работника';
        $car3->model = 'Lada Vesta';
        $car3->category_id = 3;
        $car3->driver_id = 3;
        $car3->save();

        $trip1 = new Trip();
        $trip1->user_id = 1;
        $trip1->car_id = 1;
        $trip1->from = '2024-07-01';
        $trip1->till = '2024-07-05';
        $trip1->save();

        $trip2 = new Trip();
        $trip2->user_id = 2;
        $trip2->car_id = 2;
        $trip2->from = '2024-07-10';
        $trip2->till = '2024-07-17';
        $trip2->save();

        $trip3 = new Trip();
        $trip3->user_id = 3;
        $trip3->car_id = 3;
        $trip3->from = '2024-07-15';
        $trip3->till = '2024-07-29';
        $trip3->save();
    }
}
