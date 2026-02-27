<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'email', 'fecha_nacimiento', 'curso_id'];
    
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}