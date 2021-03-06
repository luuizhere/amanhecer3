<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    public function hab()
    {
        return $this->belongsTo(Habilidade::class,'habilidade_id');
    }
    public function nivel()
    {
        return $this->belongsTo(Nivel::class,'nivel_id');
    }
}
