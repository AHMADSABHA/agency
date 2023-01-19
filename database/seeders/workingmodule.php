<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class workingmodule extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('working_modules')->insert([
            ['icon'=>'assets/images/icon/icon-10.png',
            'step'=>'Step 01',
            'title'=>'Make Smart Plan',
            'subtitle'=>'Sed ut pericias unde omnis 
            natus error sit volutate cusan
            dolore mque laudan',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['icon'=>'assets/images/icon/icon-11.png',
            'step'=>'Step 02',
            'title'=>'Prototype',
            'subtitle'=>'Sed ut pericias unde omnis 
            natus error sit volutate cusan
            dolore mque laudan',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['icon'=>'assets/images/icon/icon-12.png',
            'step'=>'Step 03',
            'title'=>'Development',
            'subtitle'=>'Sed ut pericias unde omnis 
            natus error sit volutate cusan
            dolore mque laudan',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['icon'=>'assets/images/icon/icon-13.png',
            'step'=>'Step 04',
            'title'=>'Get Results',
            'subtitle'=>'Sed ut pericias unde omnis 
            natus error sit volutate cusan
            dolore mque laudan',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
