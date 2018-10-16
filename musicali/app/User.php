<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles()
    {
      return $this->belongsToMany(Role::class);
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_user')->withPivot('user_id', 'curso_id', 'progress', 'created_at')->withTimestamps();
    }

    public function modulos()
    {
        return $this->belongsToMany(Modulo::class);
    }


    /**

    * Check multiple roles

    * @param array $roles

    */

    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**

    * Check one role

    * @param string $role

    */

    public function hasRole($role)
    {
      return null !== $this->roles()->where('name', $role)->first();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'status', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }

}
