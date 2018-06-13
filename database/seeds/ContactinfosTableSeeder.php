<?php

use Illuminate\Database\Seeder;

class ContactinfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactinfos')->insert([
            ['address' => '1234k Avenue, New York City','phone' => '(+012) 345 6433','fax' => '+82-21-1220','email' => 'info@example.com','website' => 'http://Oilw3layouts.com','created_at' => '2017-07-19 00:00:00','updated_at' => '2017-07-21 11:57:05']
        ]);
    }
}
