<?php

use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registers')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30),
            'password' => Str::random(8),
            'country' => Str::random(8)
        ]);
    }
}
