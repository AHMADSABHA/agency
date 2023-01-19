<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class aboutusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutuses')->insert([
            [
                'title' => 'Best Digital Solutiuon Provider Agency',
                'subtitle' => 'Professional Design Agency to provide solutions',
                'description' =>' On the other hand denounce with righteous and dislike men who beguile and demoralizes by the charms of pleasure thes moment, so blinded by desire that they cannot',
                'list'=>' wesd . ghlglgddjgl . lkjfljlkjlkgljlfg',
                'image' => 'assets/images/about/about-4.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]); 
    }
}
