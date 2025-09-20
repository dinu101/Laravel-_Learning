<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            // 1️⃣ Mechanic create
            $mechanic = Mechanic::create([
                'name' => 'Mechanic ' . $i,
            ]);

            // 2️⃣ Owner create (pehle owner create karenge kyunki cars table me owner_id chahiye)
            $owner = Owner::create([
                'name' => 'Owner ' . $i,
            ]);

            // 3️⃣ Car create with mechanic_id & owner_id
            Car::create([
                'name'        => 'Car ' . $i,       // ✅ 'name' column use karo
                'mechanic_id' => $mechanic->id,
                'owner_id'    => $owner->id,
            ]);
        }
    }
}
