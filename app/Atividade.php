<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $table = 'atividades';


public function mensagens()
    {
        return $this->hasMany(Mensagem::class); //tem muitas
    }
}
