<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agencystaticsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencystatics')->insert([
            [
                'icon' => 'flaticon-start-up',
                'number' => '256',
                'extinsion' =>'+',
               'type'=>'Project Complate ',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'icon' => 'flaticon-creativity',
                'number' => '783',
                'extinsion' =>'+',
               'type'=>'Project Complate ',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'icon' => 'flaticon-medal',
                'number' => '97',
                'extinsion' =>'+',
               'type'=>'Awards Winning',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'icon' => 'flaticon-technical-support',
                'number' => '35',
                'extinsion' =>'+',
               'type'=>'Years Of Experience',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
