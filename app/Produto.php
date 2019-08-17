<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Produto extends Model
{
    protected $table = "produto"; //nome da tabela
    protected $primaryKey = "id_produto"; // chave primaria

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }
}
