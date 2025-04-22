<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'idade', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
