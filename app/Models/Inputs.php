<?php

namespace cs\Models;

use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
	protected $table = "inputs";

	// public function questions(){
	// 	return $this->belongsToMany('cs\Models\Question', 'question_input','question_id','input_id');
	// }
}
