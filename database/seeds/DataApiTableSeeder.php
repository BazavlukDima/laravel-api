<?php

use Illuminate\Database\Seeder;

class DataApiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        for($i;$i<=50;$i++){
            DB::table('users_api')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
