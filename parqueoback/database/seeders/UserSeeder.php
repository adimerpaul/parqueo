<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name"=>"Admistrador",
                "email"=>"admin@test.com",
                "username"=>"ADM",
                "fechalimite"=>"2300-01-01",
                "password"=>Hash::make("admin")
            ],
            [
                "name"=>"Miguel Torrelio",
                "email"=>"mtorrelio@gmail.com",
                "fechalimite"=>"2022-03-01",
                "username"=>"MTORRELIO",
                "password"=>Hash::make("123456")
            ],
            [
                "name"=>"Jose Luis Palma",
                "email"=>"jlpalma@gmail.com",
                "fechalimite"=>"2022-03-01",
                "username"=>"JLPALMA",
                "password"=>Hash::make("123456")
            ],
        ]);
    }
}
