<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//       // DB::insert('INSERT INTO profession  (title) VALUES (?)',['Desarrollador Back-end']);
//        DB::insert('INSERT INTO profession  (title) VALUES (:title)',['title' => 'Desarrollador Back-end']);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('profession')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas

        DB::table('profession')->insert([
            'title' => "Desarrollador Backend"
        ]);
        DB::table('profession')->insert([
            'title' => "Frontend Backend"
        ]);
        DB::table('profession')->insert([
            'title' => "Diseñador Web"
        ]);
    }
}
