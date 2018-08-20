<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public function cursos()
    {
      return $this->belongsToMany(Curso::class, 'curso_modulo')->withPivot('modulo_id', 'curso_id')->withTimestamps();
    }

    public function aulas()
    {
      return $this->hasMany(Aula::class);
    }

    public function tests(){
        return $this->hasMany(Test::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    protected $fillable = [
        'name', 'description', 'status', 'level'
    ];
}
