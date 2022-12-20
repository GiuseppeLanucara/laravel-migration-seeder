<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();   //
            $train->azienda = $faker->word();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->dateTimeBetween('+0 days', '+7 days');
            $train->orario_arrivo = $faker->dateTimeBetween('+0 days', '+7 days');
            $train->codice_carrozza = $faker->bothify("??######");
            $train->carrozze = $faker->numberBetween(1, 15);
            $train->in_orario = $faker->numberBetween(0, 1);
            $train->cancellato = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
