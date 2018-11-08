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
      return $this->belongsToMany(Curso::class, 'curso_premio')->withPivot('premio_id', 'curso_id')->withTimestamps();
    }
}