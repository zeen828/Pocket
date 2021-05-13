<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pocket02FullImageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now_date = date('Y-m-d h:i:s');
        
        $data = [];
        DB::table('website')->truncate();
        DB::table('website')->insert($data);
    }
}
