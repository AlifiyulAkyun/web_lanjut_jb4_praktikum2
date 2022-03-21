<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Alifiyul Support',
            'excerpt' => 'Test the data for supporting others',
            'body' =>'Test the data for supporting others thing that compete with each other'
            ]);
    }
}
