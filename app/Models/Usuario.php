<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['nombre', 'apellido', 'tipo_doc', 'num_doc', 'correo', 'contrasena','tipo_user'];

    public function eventos(){
        return $this -> hasMany(Evento::class);
    }
}
