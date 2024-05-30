<?php

namespace Database\Seeders;

use App\Models\Airline;
use App\Models\AirlineClass;
use App\Models\Airport;
use App\Models\Category;
use App\Models\Flight;
use App\Models\Hotels;
use App\Models\Room;
use App\Models\Rooms;
use App\Models\Ticket;
use App\Models\User;
use Database\Factories\RoomFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Hotels::factory(10)->create();
        Airline::factory(10)->create();
        AirlineClass::factory(10)->create();
        Airport::factory(10)->create();
        Flight::factory(10)->create();
        Ticket::factory(10)->create();
        Rooms::factory(10)->create();
        Category::factory(10)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
