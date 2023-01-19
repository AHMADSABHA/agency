<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bestskills extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('bestskills')->insert([
        [
            'services'=>'UX/UI Strategy',
            'precentage'=>'88',
            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
        [
            'services'=>'Web Development',
            'precentage'=>'77',
            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
        [
            'services'=>'Product Design ',
            'precentage'=>'99',
            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
       
       ]);
    }
}
