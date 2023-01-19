<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class processseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processes')->insert([
            [
                'icon' => 'assets/images/icon/icon-7.png',
                'title' => 'Project Layouts',
                'subtitle' =>' Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam',
               
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], 
            [
                'icon' => 'assets/images/icon/icon-8.png',
                'title' => 'Project Analysis',
                'subtitle' =>' Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam',
               
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'icon' => 'assets/images/icon/icon-9.png',
                'title' => 'Final Results',
                'subtitle' =>' Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam',
               
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
