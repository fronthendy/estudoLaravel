<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    $filePath = public_path()."/storage/uploads";

    return [
        'nome' => $faker->realText(25, 1),
        'descricao' => $faker->realText(200),
        'imagem' => '/storage/uploads/'.$faker->image($filePath,400,300, null, false),
        'preco' => $faker->randomFloat(null, 10, 60),
        'fk_categoria' => App\Categoria::all(['id'])->random(),
        'fk_editora' => App\Editora::all(['id'])->random(),
        'fk_autor' => App\Autor::all(['id'])->random(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
