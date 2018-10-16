<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premio extends Model
{
	protected $fillable = [
        'curso_id', 'file', 'name', 'pontuacao'
    ];

    public function cursos()
    {
      return $this->belongsTo(Curso::class, 'curso_id');
    }

}