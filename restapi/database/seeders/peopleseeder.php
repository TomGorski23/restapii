<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class peopleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<50;$i++){
            DB::table('people')->insert(
                [
                    'names'=>Str::random(15),
                    'surnames'=>Str::random(30),
                    'age'=>rand(0,90),
                ]
                );
        }
    }
}
