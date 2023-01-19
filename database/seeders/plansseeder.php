<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class plansseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => 'Basic Plan',
                'price' => '16.95',
                'checked' =>' Web Design . Web Development .SEO Optimizations',
                'hidden' => 'Online Support . Domain & Hosting',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => 'Standard Plan',
                'price' => '46.95',
                'checked' =>' Web Design . Web Development . SEO Optimizations . Online Support . Domain & Hosting',
                'hidden' => '', 
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => 'Silver Plan',
                'price' => '96.95',
                'checked' =>' Web Design . Web Development . SEO Optimizations . Online Support . Domain & Hosting',
                'hidden' => '',
            ],
        ]);
    }
}
