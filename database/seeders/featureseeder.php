<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class featureseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                'title' => 'Build Your Business Workflow Faster',
                'subtitle' => 'Professional Design Agency to provide solutions',
                'discription' =>' Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam',
               'list'=>'Workflow . Design Strategy . Web Development',
                'sublist' => 'Sit amet consectetur adipiscing elit eiusmod tempor incididunt ut labore dolore . Sit amet consectetur adipiscing elit eiusmod tempor incididunt ut labore dolore . Sit amet consectetur adipiscing elit eiusmod tempor incididunt ut labore dolore',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
