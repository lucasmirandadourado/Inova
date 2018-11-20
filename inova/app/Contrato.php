<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Projeto;

class Contrato extends Model
{
    

    public function projetos(){
        return $this->belongsToMany(Projeto::class);
    }
}
