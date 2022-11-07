<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name'=>'Eduardo',
            'email'=>'correo1@test.com',
            'rol'=>'Jefe',
            'password'=>Hash::make('012345'),
            ]);
    }
}
