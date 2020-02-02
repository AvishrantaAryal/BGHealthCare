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
            'name' => 'creatudevelopers',
            'email' => 'creatudevelopers@admin.com',
            'role' =>'superadmin',
            'password' => bcrypt('password'),
        ]);
          DB::table('users')->insert([
            'name' => 'bghealthcare',
            'email' => 'bghealthcare@admin.com',
            'password' => bcrypt('password'),
            'role' =>'admin'
        ]);
    }
}
