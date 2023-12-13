<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            "title"=>"Primer post",
            "text"=>"Este es el texto del primer post",
            "posted"=>true,
            "created_at"=>now(),
            ]);
        
        DB::table('posts')->insert([
            "title"=>"Segundo post",
            "text"=>"Este es el texto del segundo post",
            "posted"=>true,
            "created_at"=>now(),
            ]);

        DB::table('posts')->insert([
            "title"=>"Tercer post",
            "text"=>"Este es el texto del tercer post",
            "posted"=>true,
            "created_at"=>now(),
            ]);
    }
}
