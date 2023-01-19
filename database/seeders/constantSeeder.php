<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class constantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constants')->insert([
            [
                'section' => 'Services',
                'title' => 'Creative Design Solutions',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Best Skills',
                'title' => 'Experience Team to Provide Ideas',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Agency Statistics',
                'title' => 'Why People’s Like Us',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Pricing Plan',
                'title' => 'Pricing Package',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Latest Work',
                'title' => 'Professional Experience',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Process',
                'title' => 'How Does We Works',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Working Module',
                'title' => 'Creative Web Design Process',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Meet Our Team',
                'title' => 'Experience Team Members',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'Testimonials',
                'title' => 'What Our Client’s About Us',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'section' => 'We’ve 1534+ Global Partners',
                'title' => ' ',
                'subtitle' =>' Professional Design Agency to provide solutions',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]); 
    }
}
