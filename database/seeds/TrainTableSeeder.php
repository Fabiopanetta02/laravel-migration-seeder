<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new Train();
        $new_train->Azienda = 'Trenitalia';
        $new_train->Stazione_di_partenza = 'Porta Susa';
        $new_train->Stazione_di_arrivo = 'Milano Centrale';
        $new_train->Orario_di_partenza = '15';
        $new_train->Orario_di_arrivo = '20';
        $new_train->Codice_treno = '302030516';
        $new_train->Numero_carrozze = '10';
        $new_train->In_orario = 'Si';
        $new_train->Cancellato = 'No';

        $new_train->save();
    }
}
