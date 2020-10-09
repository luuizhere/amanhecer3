<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
    public function atividade()
    {
        return $this->belongsTo(Atividade::class,'atividade_id');
    }
    public function resposta()
    {
        return $this->belongsTo(Resposta::class,'resposta_id');
    }
    public function habilidade()
    {
        return $this->belongsTo(Habilidade::class,'habilidade_id');
    }
    public function nivel()
    {
        return $this->belongsTo(Nivel::class,'nivel_id');
    }
    public function dr()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
