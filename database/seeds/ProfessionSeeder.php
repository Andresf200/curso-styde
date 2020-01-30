<?php

use Illuminate\Database\Seeder;
use Iluminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profession')->insert([
            'name' => "Desarrollador Backend"
        ]);
    }
}
