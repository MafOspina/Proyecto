<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleRecurso extends Model
{
    use HasFactory;
    
    protected $fillable = ['cantidad', 'tipo_recurso', 'recurso_id'];
}