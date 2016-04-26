<?php

namespace cs\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['question'];

	public function crimetypes(){
		return $this->belongsToMany('cs\Models\crimetype', 'crimetype_question_step');
	}

	// public function inputs(){
	// 	return $this->belongsToMany('cs\Models\Inputs', 'question_input', 'question_id', 'input_id');
	// }

	public function assignCrimeTypeId($cid,$sid,$iid){
		return $this->crimetypes()->attach($cid,['step_id'=>$sid, 'input_id'=>$iid]);
	}

	// public function assignStepId($sid){
	// 	return $this->crimetypes()->attach($sid);	
	// }

	// public function assignInputId($iid){
	// 	return $this->inputs()->attach($iid);
	// }

	// public function assignQuestionId($qid){
	// 	return $this->crimetypes()->attach($qid);
	// }
}
