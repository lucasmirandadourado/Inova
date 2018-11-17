<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquiteta extends Model
{
    public function getArquiteta() {
        return 'Arquiteta sendo retornada';
    }

    public function getListaArquitetas() {
        return 'Lista com todas as arquitetas';
    }
}
