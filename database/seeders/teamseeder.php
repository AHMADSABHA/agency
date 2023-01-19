<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teamseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('teamss')->insert([
        [
            'image' => 'assets/images/team/img-1.jpg',
            'team_det_id'=>1,
            'name' => 'Douglas J. Bleau',
            'position' =>'UX/UI Designer ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'image' => 'assets/images/team/img-2.jpg',
            'team_det_id'=>2,
            'name' => 'Thomas M. Wilso',
            'position' =>'Web Developer ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'image' => 'assets/images/team/img-3.jpg',
            'team_det_id'=>3,
            'name' => 'Robert J. Ryan',
            'position' =>'SEO Marketing ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'image' => 'assets/images/team/img-4.jpg',
            'team_det_id'=>4,
            'name' => 'Kenneth K. Joiner',
            'position' =>'UX/UI Designer ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'image' => 'assets/images/team/img-5.jpg',
            'team_det_id'=>5,
            'name' => 'Harold F. Garber',
            'position' =>'Senior  Manager ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'image' => 'assets/images/team/img-6.jpg',
            'team_det_id'=>6,
            'name' => 'Michael V. Howard',
            'position' =>'Junior Marketer ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'image' => 'assets/images/team/img-7.jpg',
            'team_det_id'=>7,
            'name' => 'Louis R. Bellows',
            'position' =>'SEO Marketing ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'image' => 'assets/images/team/img-8.jpg',
            'team_det_id'=>8,
            'name' => 'Moses M. Jenkins',
            'position' =>'UX/UI Designer ',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'discription' =>'Sed ut perspiciatis unde omnis iste natus error sit luptate
            accusantium doloremque laudantium, totam rem aperiams eaque ipsa quae ab illo inventore veritatis et quasi architec
            to beatae vitae dicta sunt explicabo. Nemo enim ipsam vo
            luptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione luptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore 
            dolore magnam aliquam quaerat voluptatem ',
'youtube' => '',
'behance' => '',
'vemo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
       ]);
    }
}
