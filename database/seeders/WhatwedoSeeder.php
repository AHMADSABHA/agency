<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhatwedoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('whatwedos')->insert([
            [
                'title' => 'Popular Solution For Growth Business',
                'subtitle' => 'Professional Design Agency to provide solutions',
                'discription' =>' Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium, totam rem aperiam eaquepsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enimpsam luptate quia voluptas aspernatur aut fugitdolor sit amet',
                'image' => 'assets/images/about/img-5.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]); 
    }
}
