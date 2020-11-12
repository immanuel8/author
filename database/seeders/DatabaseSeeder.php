<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'ponga',
            'gender' => 'male',
            'biography' => 'asfdfkjeufhoeogoge.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('authors')->insert([
            'name' => 'bojak',
            'gender' => 'female',
            'biography' => 'scbhohv sakjdgis sjgduyf.', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}