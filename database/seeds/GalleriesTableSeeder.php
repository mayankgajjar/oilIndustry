<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            ['title' => 'Oil Industry','description' => 'Oil Industry','image_name' => '1500617861.jpg','status' => '1','created_at' => '2017-07-21 00:47:41','updated_at' => '2017-07-21 00:56:14']
        ]);
    }
}
