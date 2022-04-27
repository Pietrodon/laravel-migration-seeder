<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            $train =new Trains();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->orario_di_partenza = $faker->dateTime();
            $train->orario_di_arrivo = $faker->dateTime();
            $train->numero_treno = $faker->bothify('???-###');
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();            
            $train->save();
        }
    }
}
