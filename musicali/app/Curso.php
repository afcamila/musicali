<?php

namespace App;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $fillable = ['name', 'description', 'status'];

  public function users()
	{
	  return $this->belongsToMany(User::class, 'curso_user')->withPivot('user_id', 'curso_id', 'progress', 'created_at')->withTimestamps();
	}

	public function modulos()
  {
    return $this->hasMany(Modulo::class)->withPivot('modulo_id', 'curso_id')->withTimestamps();
  }

  public function aulas()
  {
    return $this->hasManyThrough('App\Aula', 'App\Modulo');
  }

  public function tests()
  {
    return $this->hasOne(Test::class)->select('curso_id');
  }

  public function premios()
  {
    return $this->hasMany(Premio::class)->select('curso_id');
  }

  public function updateUserCursoPivot($user, $progress)
  {
    return DB::table('curso_user')
      ->where('curso_id', $this->id)
      ->where('user_id', $user->id)
      ->update(array('progress' => $progress));
  }

}
