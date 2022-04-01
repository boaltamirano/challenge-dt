<?php

namespace Database\Seeders;

use App\Models\Vuelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vuelo = new Vuelo();
        $vuelo->origen = "Ecuador";
        $vuelo->destino = "Brasil";
        $vuelo->duracion = "1 h 20 min";
        $vuelo->save();

        $vuelo2 = new Vuelo();
        $vuelo2->origen = "Canada";
        $vuelo2->destino = "Ecuador";
        $vuelo2->duracion = "5 h 45 min";
        $vuelo2->save();
    }
}
