<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagens';


public function atividade()
    {
        return $this->belongsTo(Atividade::class); //pertence a
    }
}