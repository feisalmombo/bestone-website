<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
        ->insert([
            'first_name' => 'feisal',
            'last_name' => 'mombo',
            'email' => 'feisalmombo29@gmail.com',
            'password' => bcrypt('123456789fm'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
