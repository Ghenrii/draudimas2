<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;
use App\Models\Car;

class OwnersAndCarsSeeder extends Seeder
{
    public function run()
    {
        $owners = Owner::factory(10)->create();

        $owners->each(function ($owner) {
            Car::factory(rand(1, 3))->create(['owner_id' => $owner->id]);
        });
    }
}

