<?php

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i= 0; $i < 10; $i++){
            $new_train = new Train();

            $new_train->Azienda = $faker->word();
            $new_train->Stazione_di_partenza = $faker->word();
            $new_train->Stazione_di_arrivo = $faker->word();
            $new_train->Orario_di_partenza = $faker->randomFloat(2);
            $new_train->Orario_di_arrivo = $faker->randomFloat(2);
            $new_train->Codice_treno = $faker->vat();
            $new_train->Numero_carrozze = $faker->randomDigit();
            $new_train->In_orario = $faker->word();
            $new_train->Cancellato = $faker->word();
    
            $new_train->save();
        }
    }
}
