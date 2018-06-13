<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Mayank Gajjar','email' => 'mga@narola.email','password' => '$2y$10$N61qqkjRd7zYSNchY7TPh.RRjCMEC8As0Yp9RUhyJS7zf79NxDelG','remember_token' => 'OD06dFwIum2bnQ4gPZWJIpto1eo0BYTSytUtVAipjNsj4hauMoAdjcXcNhCG','created_at' => '2017-07-16 21:36:06','updated_at' => '2017-07-16 21:36:06']
        ]);
    }
}
