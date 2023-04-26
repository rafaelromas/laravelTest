<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddress extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table("users")->insert([

            "name" => "Rafael Roma Santana",
            "email" => "rafael.roma10@gmail.com",
            "password" => Hash::make("123456")

        ]);

        DB::table("address")->insert([

            "address" => "Rua Dos Bobos, número 0",

        ]);
    }
}
