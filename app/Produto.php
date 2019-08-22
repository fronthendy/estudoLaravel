<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Editora;

class Produto extends Model
{
    protected $table = "produto"; //nome da tabela
    protected $primaryKey = "id_produto"; // chave primaria

    public function categoria(){ //traz categoria
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }

    public function editora(){ //traz editora
        return $this->belongsTo(Editora::class, 'fk_editora');
    }
}
