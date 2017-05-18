<?php

use Illuminate\Database\Seeder;

class UsersApiTableSeeder extends Seeder
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
            DB::table('data_api')->insert([
                'text' => str_random(50),
                'title' => str_random(20),
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
