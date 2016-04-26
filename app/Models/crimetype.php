<?php

namespace cs\Models;

use Illuminate\Database\Eloquent\Model;

class crimetype extends Model
{
	protected $table = "crimetypes";
	protected $fillable = ['type'];

	public function questions(){
		return $this->belongsToMany('cs\Models\Question','crimetype_question_step','crimetype_id','question_id')->withPivot('step_id','input_id');
	}
}
