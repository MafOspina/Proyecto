<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleRecurso extends Model
{
    use HasFactory;
    
    protected $fillable = ['recurso_id', 'evento_id', 'cantidad'];

    public function recurso(){
        return $this -> belongsTo(Recurso::class, 'recurso_id');
    }

    public function evento(){
        return $this -> belongsTo(Evento::class, 'evento_id');
    }
}