<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testmilion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
           ['icon' => 'assets/images/testimonial/thumb-1.jpg',
           'discription'=>'Sit amet consectetur adipiscing
           elit sed do eiusmod temporincdes
           idunt ut labore et dolore magnase 
           aliqua. Quis ipsum suspendisseyc 
           sltrices gravida. Risus commodo 
           verra maecenas lacusvel.',
           'Name'=>'AHMAD SABHA',
           'position'=>'junior  developer',
           'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            ['icon' => 'assets/images/testimonial/thumb-2.jpg',
            'discription'=>'Sit amet consectetur adipiscing
            elit sed do eiusmod temporincdes
            idunt ut labore et dolore magnase 
            aliqua. Quis ipsum suspendisseyc 
            sltrices gravida. Risus commodo 
            verra maecenas lacusvel.',
            'Name'=>'ahmad',
            'position'=>'senior manager',
            'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),],
             ['icon' => 'assets/images/testimonial/thumb-3.jpg',
             'discription'=>'Sit amet consectetur adipiscing
             elit sed do eiusmod temporincdes
             idunt ut labore et dolore magnase 
             aliqua. Quis ipsum suspendisseyc 
             sltrices gravida. Risus commodo 
             verra maecenas lacusvel.',
             'Name'=>'mohamad',
             'position'=>'junior  developer',
             'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),],
              ['icon' => 'assets/images/testimonial/thumb-4.jpg',
              'discription'=>'Sit amet consectetur adipiscing
              elit sed do eiusmod temporincdes
              idunt ut labore et dolore magnase 
              aliqua. Quis ipsum suspendisseyc 
              sltrices gravida. Risus commodo 
              verra maecenas lacusvel.',
              'Name'=>'mahmoud',
              'position'=>'senior  developer',
              'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),],

        ]);
    }
}
