<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'apellido', 'tipo_doc', 'num_doc', 'correo', 'contrasena','tipo_user','estado'];

    public function eventos(){
        return $this -> hasMany(Evento::class);
    }
}
