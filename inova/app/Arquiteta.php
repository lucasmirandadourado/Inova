<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Projeto;

class Arquiteta extends Model
{
    protected $fillable = ['id', 'nome', 'contato', 'endereco'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    
    public function getListaArquitetas($limit) {
        return DB::table('arquitetas')->paginate($limit); 
    }

    public function getProjetos(){
        return $this->belongsToMany(Projeto::class);
    }
    
    public function getListaAll() {
        return DB::table('arquitetas')->get();
    }
}
