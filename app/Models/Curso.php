<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'duracao'];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
