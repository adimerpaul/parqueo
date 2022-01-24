<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParqueoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parqueos')->insert([
            "placa"=>"5308LHG",
            "conductor"=>"CHAMBI",
            "nivel"=>"SOT",
            "carril"=>"1",
            "fechaingreso"=>"2000-01-01",
            "horaingreso"=>"10:00",
//            "fechasalida"=>"2000-01-01",
//            "horasalida"=>"10:00",
            "tipo"=>"HORAS",
//            "horas"=>"10",
//            "bs"=>"10",
            "operador"=>"PARQUEO",
            "estado"=>"OCUPADO",
        ]);
    }
}
