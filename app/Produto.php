<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produto"; //nome da tabela
    protected $primaryKey = "id_produto"; // chave primaria

}
