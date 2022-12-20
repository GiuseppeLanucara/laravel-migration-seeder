<?php

namespace Database\Seeders;

use App\Models\Train;

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
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('+0 days', '+7 days');
            $train->arrival_time = $faker->dateTimeBetween('+0 days', '+7 days');
            $train->train_code = $faker->bothify("??######");
            $train->total_carriages_num = $faker->numberBetween(1, 15);
            $train->in_time = $faker->numberBetween(0, 1);
            $train->cancelled = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
