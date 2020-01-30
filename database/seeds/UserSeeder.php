<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $profession = DB::select('SELECT id  FROM profession WHERE  title = ? LIMIT 0,1',['Desarrollador Backend']);
       // $profession = DB::table('profession')->select('id')->take(1)->get();
       // $profession = DB::table('profession')->select('id')->first();
        $profession = DB::table('profession')->select('id')->where('title','Desarrollador Backend')->first();

        DB::table('users')->insert([
            'name' => 'Andres Felipe Florrian',
            'email' => 'afloriangonzales@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' =>  $profession->id
        ]);
    }
}
