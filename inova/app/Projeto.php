<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Arquiteta;

class Projeto extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $fillable = ['id', 'nome','arquiteta_id','cliente_id']; 

    public function getCliente() {
        return $this->hasMany(Cliente::class);
    }
    public function getArquiteta() {
        return $this->hasMany(Arquiteta::class);
    }

    public function getListaProjetos($limit) {
        return DB::table('projetos')->paginate($limit); 
    }
}
