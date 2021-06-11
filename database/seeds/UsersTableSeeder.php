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
            'name' => 'Karl Murray',
            'email' => 'karlm89@me.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
