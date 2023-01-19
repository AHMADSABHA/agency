<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class getin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('get_in_touches')->insert([
        ['icon'=>'far fa-map-marker-alt',
        'title'=>'Locations',
        'subtitle'=>'505 Main Street, 2nd 
        Block, New York',],
        ['icon'=>'far fa-envelope-open-text',
        'title'=>'Email Address',
        'subtitle'=>'hotlinein@gmail.com # www.info.net',],
        ['icon'=>'far fa-phone',
        'title'=>'Phone Number',
        'subtitle'=>'+012 (345) 678 99 # +0123456',],
        ['icon'=>'far fa-clock',
        'title'=>'Working Hours',
        'subtitle'=>'Sunday - Monday # 09 am - 05 pm',]
      ]);
    }
}
