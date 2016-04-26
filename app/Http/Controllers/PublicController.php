<?php

namespace cs\Http\Controllers;

use Illuminate\Http\Request;

use cs\Http\Requests;
use cs\Models\Question;
use cs\Models\crimetype;

use cs\Logic\User\QuestionsRepository;

class PublicController extends Controller
{
	public function index(){
		$crimetypes = crimetype::orderBy('type','asc')->get();
		$step1='';$step2='';$step3='';$step4='';$step5='';
		return view('frontend.form')->withCrimetypes($crimetypes)->withStep1($step1)->withStep2($step2)->withStep3($step3)->withStep4($step4)->withStep5($step5);
	}
	public function index1(){
		return view('frontend.form1');
	}

	public function index1data(){
		$crimetypes = crimetype::orderBy('type','asc')->get();
		$step1='';$step2='';$step3='';$step4='';$step5='';
		return response()->json([$crimetypes, $step1, $step2, $step3, $step4, $step5]);
	}

	public function show(Request $request, QuestionsRepository $questionsRepository){
		// if($request->ajax()){
		// $this->validate($request,[
		// 	'id'=>'required',
		// 	'type'=>'required',
		// 	]);
		$data = $questionsRepository->returnSteps($request);

		$step1 = $data[0];
		$step2 = $data[1];
		$step3 = $data[2];
		$step4 = $data[3];
		$step5 = $data[4];
		// $input = $data[5];
// $response = json(['step1'=>$step1, 'step2'=>$step2, 'step3'=>$step3, 'step4'=>$step4, 'step5'=>$step5]);
		// return view('frontend.form',compact($response));
			// $html = view('frontend.form', ['step1'=>$step1, 'step2'=>$step2, 'step3'=>$step3, 'step4'=>$step4, 'step5'=>$step5]);
			// return response()->json(['message'=>$html]);
		return response()->json(['step1'=>$step1, 'step2'=>$step2, 'step3'=>$step3, 'step4'=>$step4, 'step5'=>$step5],200);
			// return view('frontend.form')->withStep1($step1)->withStep2($step2)->withStep3($step3)->withStep4($step4)->withStep5($step5);
		// }else{
		// 	return view('frontend.form')->with('message','This is not ajax request');
		// }
		// return view('frontend.form')->withCrimetypes($crimetypes)->withStep1($step1)->withStep2($step2)->withStep3($step3)->withStep4($step4)->withStep5($step5);
		return view('frontend.form',compact($response));
	}

	public function store(Request $request){
		dd($request->id);
	}
	public function test(){
		return view('frontend.test');
	}
	public function formdata(Request $request){
		$data = $request->all();
		return Response::json(array(
			'success' => true,
			'data'   => $data
			)); 
	}
}
