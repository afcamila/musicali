<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    public function modulos()
    {
      return $this->belongsToMany(Modulo::class);
    }

    public function users() {
    	return $this->belongsToMany(User::class);
   	}

    protected $fillable = [
        'name', 'description', 'status', 'video',
    ];
}
