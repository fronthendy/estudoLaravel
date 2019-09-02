<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Editora;
use App\Autor;

class Produto extends Model
{
    protected $table = "produto"; //nome da tabela
    protected $primaryKey = "id"; // chave primaria

    public function categoria(){ //traz categoria
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }

    public function editora(){ //traz editora
        return $this->belongsTo(Editora::class, 'fk_editora');
    }

    public function autor(){ //traz editora
        return $this->belongsTo(Autor::class, 'fk_autor');
    }
}
