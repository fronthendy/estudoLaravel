<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Categoria extends Model
{
    protected $table = "categoria";
    protected $primaryKey = "id_categoria";

    public function filmes(){
        return $this->hasMany(Produto::class, 'fk_categoria', 'id_categoria');
    }
}
