<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = ['fechaEve','horaIniEve','reporteEve','numArbEve','tipEve','estEve','terreno_id','usuario_id'];

    public function detallesrecursos(){
        return $this -> hasMany(DetalleRecurso::class);
    }
    
    public function terreno(){
        return $this -> belongsTo(Terreno::class, 'terreno_id');
    }

    public function usuario(){
        return $this -> belongsTo(Usuario::class, 'usuario_id');
    }
}
