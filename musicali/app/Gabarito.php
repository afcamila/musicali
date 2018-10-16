<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gabarito extends Model
{
	protected $fillable = ['user_id', 'question_id', 'answer', 'is_correct'];

}
