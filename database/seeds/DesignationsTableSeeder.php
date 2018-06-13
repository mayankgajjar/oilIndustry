<?php

use Illuminate\Database\Seeder;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            ['designations_name' => 'Worker','designations_status' => '1','created_at' => '2017-07-21 10:41:01','updated_at' => '2017-07-21 11:19:59'],
            ['designations_name' => 'Supervisor','designations_status' => '1','created_at' => '2017-07-21 10:46:44','updated_at' => '2017-07-21 10:46:44']
        ]);
    }
}
