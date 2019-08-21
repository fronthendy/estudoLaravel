<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('categoria')->get()->count() == 0){

            DB::table('categoria')->insert([
                [ 'name' => 'técnico' ],
                [ 'name' => 'romance' ],
                [ 'name' => 'mangá' ],
                [ 'name' => 'ficção' ],
            ]);

        }
    }
}
