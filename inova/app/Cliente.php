<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Projeto;

class Cliente extends Model
{
    protected $fillable = ['id', 'nome', 'contato', 'endereco'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    
    public function getListaCliente($limit) {
        return DB::table('clientes')->paginate($limit); 
    }

    public function projetos(){
        return $this->belongsToMany(Projeto::class);
    }

    public function getListaClientes() {
        return DB::table('clientes')->get();
    }
}
