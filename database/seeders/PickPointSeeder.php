<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\PickPoint;


class PickPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed some pick points
        PickPoint::create([
            'name' => 'Pick Point 1',
            'description' => 'Description for Pick Point 1',
        ]);

        PickPoint::create([
            'name' => 'Pick Point 2',
            'description' => 'Description for Pick Point 2',
        ]);

        // You can add more seed data here
    }
}

