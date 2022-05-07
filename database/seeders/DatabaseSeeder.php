<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory()->create(['name' => 'aziz jad', 'email' => 'aziz@gmail.com' , 'user_type_id' => '1']);
        User::factory()->create(['name' => 'Ayoub Jarraya', 'email' => 'Ayoub@gmail.com' , 'user_type_id' => '1']);

        User::factory()->create(['name' => 'Daniel Sittig', 'email' => 'daniel@gmail.com' , 'user_type_id' => '2']);
        User::factory()->create(['name' => 'Marwa Bahloul', 'email' => 'marwa@gmail.com' , 'user_type_id' => '1']);

        User::factory()->create(['name' => 'ramzy fakhfakh', 'email' => 'ramzyfakhfakh1@gmail.com' , 'user_type_id' => '1']);
        User::factory()->create(['name' => 'Majdi Njeh', 'email' => 'majdinjeh@gmail.com' , 'user_type_id' => '1']);
    }
}
