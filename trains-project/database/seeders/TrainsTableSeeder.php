<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'orario_arrivo' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'codice_treno' => $faker->bothify('??-####'),
                'totale_carrozze' => $faker->numberBetween(6, 30),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
