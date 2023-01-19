<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            
            [
                'blog_id'=>1,
                'image'=>'assets/images/blog/standard-1.jpg',
                'tag'=>'Web Design',
                'date_blog'=>'2022-05-01',
                'title'=>'Powerful Terminal And Command Line  Seeny
                Tools  Modern Web Development',
                'disc'=>'Sit amet consectetur adipiscing elit sed do eiusmod temp didunt ut labore et dolore magna aliqua suspendisse',
                'sub_image'=>'assets/images/blog/blog-single-1.jpg',
                'title2'=>'Designing Better Links For Websites And Emails Guideline Useful VS Code Extensions For Front-End Developers',
                'disc2'=>'Nemo enim ipsam voluptatem quia voluptas sit aspernate odit aut fugit quia coquuntur magni dolores eosqui ratione voluptatem nesciunt eque porro quisquam est qui dolorem epsum quia dolor sit amet, consectetur adipise velit sed quia non numquam',
                'list'=>'Digital Creative Agency # Professional Problem Solutions # Web Design & Development',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'blog_id'=>2,
                'image'=>'assets/images/blog/standard-2.jpg',
                'tag'=>'Web Design',
                'date_blog'=>'2022-05-07',
                'title'=>'Powerful Terminal And Command Line  Seeny
                Tools  Modern Web Development',
                'disc'=>'Sit amet consectetur adipiscing elit sed do eiusmod temp didunt ut labore et dolore magna aliqua suspendisse',
                'sub_image'=>'assets/images/blog/blog-single-2.jpg',
                'title2'=>'Designing Better Links For Websites And Emails Guideline Useful VS Code Extensions For Front-End Developers',
                'disc2'=>'Nemo enim ipsam voluptatem quia voluptas sit aspernate odit aut fugit quia coquuntur magni dolores eosqui ratione voluptatem nesciunt eque porro quisquam est qui dolorem epsum quia dolor sit amet, consectetur adipise velit sed quia non numquam',
                'list'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'blog_id'=>3,
                'image'=>'assets/images/blog/standard-3.jpg',
                'tag'=>'UX/UI',
                'date_blog'=>'2022-03-04',
                'title'=>'Powerful Terminal And Command Line  Seeny
                Tools  Modern Web Development',
                'disc'=>'Sit amet consectetur adipiscing elit sed do eiusmod temp didunt ut labore et dolore magna aliqua suspendisse',
                'sub_image'=>'assets/images/blog/blog-single-3.jpg',
                'title2'=>'Designing Better Links For Websites And Emails Guideline Useful VS Code Extensions For Front-End Developers',
                'disc2'=>'Nemo enim ipsam voluptatem quia voluptas sit aspernate odit aut fugit quia coquuntur magni dolores eosqui ratione voluptatem nesciunt eque porro quisquam est qui dolorem epsum quia dolor sit amet, consectetur adipise velit sed quia non numquam',
                'list'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'blog_id'=>4,
                'image'=>'assets/images/blog/standard-3.jpg',
                'tag'=>'UX/UI',
                'date_blog'=>'2022-02-04',
                'title'=>'Powerful Terminal And Command Line  Seeny
                Tools  Modern Web Development',
                'disc'=>'Sit amet consectetur adipiscing elit sed do eiusmod temp didunt ut labore et dolore magna aliqua suspendisse',
                'sub_image'=>'assets/images/blog/blog-single-1.jpg',
                'title2'=>'this is test',
                'disc2'=>'Nemo enim ipsam voluptatem quia voluptas sit aspernate odit aut fugit quia coquuntur magni dolores eosqui ratione voluptatem nesciunt eque porro quisquam est qui dolorem epsum quia dolor sit amet, consectetur adipise velit sed quia non numquam',
                'list'=>'one # two # three',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
