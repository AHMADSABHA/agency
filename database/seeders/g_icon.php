<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class g_icon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('global_icons')->insert([
            ['icon'=>'assets/images/partners/img-1.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-2.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-3.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-4.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-5.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-6.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-7.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-8.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-9.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon'=>'assets/images/partners/img-10.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
        ]);
    }
}
