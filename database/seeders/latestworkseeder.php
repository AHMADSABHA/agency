<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class latestworkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'cover_image' => 'assets/images/portfolio/img-1.jpg',
                'title' => 'Dashboard Design',
                'subtitle' =>'Creative Design ',
               'client'=>'ahmad',
                'location' => 'idlip',
                'project_url' => '',
                'description' => 'Dashboard',
                'title2' => 'Design',
                'description2' => 'Dashboard',
                'image' => 'assets/images/portfolio/img-1.jpg',
                'project_date' => '2022-12-2',
                'title3' => '',
                'disc3' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cover_image' => 'assets/images/portfolio/img-2.jpg',
                'title' => 'Landing Pages',
                'subtitle' =>'Creative Design ',
               'client'=>'mohamad',
                'location' => 'idlip',
                'project_url' => '',
                'description' => 'Pages',
                'title2' => 'Landing',
                'description2' => 'Creative Design',
                'image' => 'assets/images/portfolio/img-2.jpg',
                'project_date' => '2022-11-9',
                'title3' => '',
                'disc3' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cover_image' => 'assets/images/portfolio/img-3.jpg',
                'title' => 'website Design',
                'subtitle' =>'Creative Design ',
               'client'=>'ali',
                'location' => 'idlip',
                'project_url' => '',
                'description' => 'websites',
                'title2' => 'Design',
                'description2' => 'Dashboard',
                'image' => 'assets/images/portfolio/img-3.jpg',
                'project_date' => '2022-12-6',
                'title3' => '',
                'disc3' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cover_image' => 'assets/images/portfolio/img-4.jpg',
                'title' => 'mobile Design',
                'subtitle' =>'Creative Design ',
               'client'=>'mahmoud',
                'location' => 'idlip',
                'project_url' => '',
                'description' => 'mobile apps',
                'title2' => 'Design',
                'description2' => 'Dashboard',
                'image' => 'assets/images/portfolio/img-4.jpg',
                'project_date' => '2022-12-11',
                'title3' => '',
                'disc3' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ]); 
    }
}
