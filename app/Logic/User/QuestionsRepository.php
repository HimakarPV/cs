<?php
namespace cs\Logic\User;

use cs\Models\crimetype;
use cs\Models\Inputs;
use Illuminate\Http\Request;


class QuestionsRepository{

	// protected $userMailer;

	// public function __construct(UserMailer $userMailer){
	// 	$this->userMailer = $userMailer;
	// }


	public function returnSteps(Request $request){
		// $req = array_flatten($request);
		$data = $request->id;
		// dd($data);
		if (!empty($data)) {
			foreach ($data as $key) {
				$types[]=crimetype::findOrFail($key);
			}
			foreach ($types as $type) {
				$step1[$type->question] = $type->questions()->wherePivot('step_id',1)->get();
				$step2[$type->question] = $type->questions()->wherePivot('step_id',2)->get();
				$step3[$type->question] = $type->questions()->wherePivot('step_id',3)->get();
				$step4[$type->question] = $type->questions()->wherePivot('step_id',4)->get();
				$step5[$type->question] = $type->questions()->wherePivot('step_id',5)->get();
			}

			$step1 = array_flatten($step1);
			$step2 = array_flatten($step2);
			$step3 = array_flatten($step3);
			$step4 = array_flatten($step4);
			$step5 = array_flatten($step5);
		}else{
			$step1='';$step2='';$step3='';$step4='';$step5='';
		}
		// $input = new Inputs;
		// $input = crimetype::findOrFail('1')->questions()->wherePivot('step_id',1)->get();
		// $input = $input->questions()->get();


		return [$step1,$step2,$step3,$step4,$step5];
	}
}