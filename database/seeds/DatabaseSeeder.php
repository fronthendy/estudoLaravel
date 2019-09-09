<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Produto;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->delete();
        DB::table('categoria')->insert([
            ['nome' => 'Ficção', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Tecnico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Romance', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Mangá', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Programação', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Terror', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

        DB::table('editora')->delete();
        DB::table('editora')->insert([
            ['nome' => 'Moderna', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Saraiva', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Sextante', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Leya', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Nova Fronteira', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Rocco', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Arqueiro', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('autor')->delete();
        DB::table('autor')->insert([
            ['nome' => 'Dan', 'sobrenome' => 'Brown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Marian', 'sobrenome' => 'Keys', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Milan', 'sobrenome' => 'Kundera', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Chuck', 'sobrenome' => 'Palahniuk', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nome' => 'Charles', 'sobrenome' => 'Bukowski', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

        factory(Produto::class, 10)->create();
    }
}
