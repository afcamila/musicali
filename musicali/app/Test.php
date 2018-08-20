<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable = [
        'curso_id',
    ];

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function cursos()
    {
      return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

}
