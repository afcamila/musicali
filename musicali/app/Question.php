<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	public function tests() {
        return $this->belongsToMany(Test::class);
    }

	protected $fillable = ['id', 'title', 'level', 'a', 'b', 'c', 'is_correct'];

}
