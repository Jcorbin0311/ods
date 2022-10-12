<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([[
            'name'=>'Bob Smith',
            'telephone'=>'231-2121'
        ],
        [
            'name'=>'Fred Drakes',
            'telephone'=>'231-2124'
        ]

        ]);

    }
}
