<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class serviceseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('services')->insert([
        
            [
                'icon' => 'flaticon-strategy',
                'title' => 'Strategy',
                'list' =>' Product Management . MVP Definition . Product Strategy',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'icon' => 'flaticon-design',
                'title' => 'Product Design',
                'list' =>' Product Management . MVP Definition . Product Strategy',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'icon' => 'flaticon-source-code',
                'title' => 'Development',
                'list' =>' Product Management . MVP Definition . Product Strategy',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

       ]);
    }
}
