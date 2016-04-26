<?php

namespace cs\Http\Controllers\Admin;

use Illuminate\Http\Request;

use cs\Http\Requests;
use cs\Http\Controllers\Controller;
use cs\Models\crimetype;
use cs\Models\Question;
use cs\Models\Step;
use cs\Models\Inputs;

class AdminController extends Controller
{
	public function index(){
		$crimetypes = crimetype::orderBy('type','asc')->lists('type','id');
		$questions= Question::paginate(15);
		$steps = Step::lists('step','id');
		$inputs = Inputs::lists('type','id');
		return view('panels.admin.index')->withCrimetypes($crimetypes)->withQuestions($questions)->withSteps($steps)->withInputs($inputs);
	}

	// public function adminData(){
	// 	$steps = Step::get();
	// 	return response()->json($steps);
	// }

	public function testindex(){
		return view('panels.admin.test');
	}

	public function crimetype(Request $request){
		$input = $request->all();
		$this->validate($request,[
			'crimeType'=>'required',
			]);
		$crimetype = new crimetype;
		$type = $crimetype->where('type',$input['crimeType'])->first();
		if(!empty($type))
		{
			if ($type->type == $input['crimeType']) {

				return redirect()->back()->with('status','danger')->with('message','Crime Type already exist');
			}
		}else
		{
			$crimetype->type = ucfirst($input['crimeType']);
			$crimetype->save();

			return redirect()->back()->with('status','success')->with('message','Crime Type created..');
		}
	}

	public function question(Request $request){
		$input = $request->all();
		$cid = $request->cid;
		$sid = $request->sid;
		$iid = $request->iid;
		// dd($request->sid);
		$this->validate($request,[
			'question'=>'required',
			'cid'=>'required',
			'sid'=>'required',
			'iid'=>'required',
			]);
		$question = new Question;
		$type = $question->where('question',$input['question'])->first();
		if(!empty($type))
		{
			if ($type->question == $input['question']) {
				return redirect()->back()->with('status','danger')->with('message','Question already exist..');
			}
		}else
		{
			$question->question = ucfirst($input['question']);
			$question->save();

			$q = $question->where('question', $input['question'])->first();
			$qid = $q->id;
			$question->assignCrimeTypeId($cid,$sid,$iid);
			// $question->assignStepId($sid);
			// $question->assignInputId($iid);

			return redirect()->back()->with('status','success')->with('message','Question created..');
		}	
	}

	public function step(Request $request){
		$input = $request->all();

		$this->validate($request,['step'=>'required']);

		$step = new Step;

		$match = $step->where('step',$input['step'])->first();
		if(!empty($match)){
			if($match->step == $input['step']){
				return redirect()->back()->with('message','Step already exist..');
			}
		}else
		{
			$step->step = ucfirst($input['step']);
			$step->save();

			return redirect()->back()->with('message','Step Added..');
		}
	}
}
