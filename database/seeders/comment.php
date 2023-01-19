<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('comments')->insert([
        ['blog_id'=>1,
        'name'=>'Randal L. Tomas',
        'date_comment'=>'2022-05-02',
        'icon'=>'assets/images/blog/comment-1.jpg',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
        ['blog_id'=>1,
        'name'=>'Rand Tomas',
        'date_comment'=>'2022-05-12',
        'icon'=>'assets/images/blog/comment-2.jpg',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
        ['blog_id'=>1,
        'name'=>'ndal L. Tom',
        'date_comment'=>'2022-05-22',
        'icon'=>'assets/images/blog/comment-3.jpg',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
    ,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),],
       ]);
    }
}
