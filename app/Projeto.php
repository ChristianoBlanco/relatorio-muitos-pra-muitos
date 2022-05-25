<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    //
    protected $table = 'projetos';

    //withPivot => Recupera os campos intermediários pois o Laravel só imprime em tela os campos de seus relacionamentos por padrão.
    function desenvolvedores() {
        return $this->belongsToMany("App\Desenvolvedor", "alocacoes")->withPivot('horas_semanais');;
    }
}
