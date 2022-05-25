<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    //
    protected $table = 'projetos';

    //withPivot => Recupera os campos intermedi�rios pois o Laravel s� imprime em tela os campos de seus relacionamentos por padr�o.
    function desenvolvedores() {
        return $this->belongsToMany("App\Desenvolvedor", "alocacoes")->withPivot('horas_semanais');;
    }
}
