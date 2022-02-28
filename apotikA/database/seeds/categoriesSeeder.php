<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=> "ANALGESIK NARKOTIK",
            'description'=> "mau cepat besar?",
        ]);
        DB::table('categories')->insert([
            'name'=> "ANALGESIK NON NARKOTIK",
            'description'=> "mau cepat kecil?",
        ]);
    }
}
