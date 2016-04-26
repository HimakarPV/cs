@extends('panels.admin.main')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-3" style="padding: 0px;">
			<div class="col-md-12">
				<div class="block">
					<h4>Steps<a href="#stepModal" class="pull-right" data-toggle="modal"><img width="18px" src="/uploads/plus.png"></a></h4>
					<span></span>
					<hr>
					<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="stepModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Add Step</h4>
								</div>
								<div class="modal-body">
									<div class="">
										{!!Form::open(['url'=>'/admin/poststep','class'=>'form-horizontal'])!!}
										<div class="form-group">
											<label for="inputStep" class="col-md-4 control-label">Step</label>
											<div class="col-md-6">
												{!!Form::text('step',null,['class'=>'form-control','placeholder'=>'Step','ng-model'=>'formdata.step','required','id'=>'inputStep'])!!}
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<input type="submit" ng-click="addStep(formdata.step)" class="btn btn-color  pull-right" value="ADD »">
											</div>
										</div>
										{!!Form::close()!!}
									</div>
								</div>
							</div>
						</div>
					</div>

					<ul class="list-unstyled">
						@foreach($steps as $step)
						<li>
							<p>{{$step}}</p>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<div class="block">
					<h4>Crime Types<a href="#crimeModal" class="pull-right" data-toggle="modal"><img width="18px" src="/uploads/plus.png"></a></h4>
					<span></span>
					<hr>
					<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="crimeModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Add Crime Type</h4>
								</div>
								<div class="modal-body">
									<div class="">
										{!!Form::open(['url'=>route('admin.crimetype'),'class'=>'form-horizontal'])!!}
										<div class="form-group">
											<label for="inputCrimeType" class="col-md-4 control-label">Crime Type</label>
											<div class="col-md-6">
												{!!Form::text('crimeType',null,['class'=>'form-control','placeholder'=>'Crime Type','required','id'=>'inputCrimeType'])!!}
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<button type="submit" class="btn btn-color  pull-right">
													ADD
												</button>
											</div>
										</div>
										{!!Form::close()!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<ul class="list-unstyled">
						@foreach($crimetypes as $type)
						<li>
							<p>{{$type}}</p>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-9" style="padding: 0px;">
			<div class="col-md-12">
				<div class="block">
					<h4>Questions<a href="#questionModal" class="pull-right" data-target=".bs-example-modal-lg" data-toggle="modal"><img width="18px" src="/uploads/plus.png"></a></h4>
					<span></span>
					<hr>
					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="questionModal">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Add Question</h4>
								</div>
								<div class="modal-body">
									<div class="">
										{!!Form::open(['url'=>route('admin.question'),'class'=>'form-horizontal'])!!}
										<div class="form-group">
											<label for="inputQuestion" class="col-md-4 control-label">Question</label>
											<div class="col-md-6">
												{!!Form::text('question',null,['class'=>'form-control','placeholder'=>'Question','required','id'=>'inputQuestion'])!!}
											</div>
										</div>
										<div class="form-group">
											<label for="inputQuestion" class="col-md-4 control-label">Select Crime Type</label>
											<div class="col-md-6">
												{!! Form::select('cid',$crimetypes,null,['placeholder'=>'Select Crime Type','class' => 'form-control','required']) !!}
											</div>
										</div>
										<div class="form-group">
											<label for="inputStep" class="col-md-4 control-label">Select Step</label>
											<div class="col-md-6">
												{!! Form::select('sid',$steps,null,['placeholder'=>'Select Step','class' => 'form-control','required']) !!}
											</div>
										</div>
										<div class="form-group">
											<label for="inputQuestion" class="col-md-4 control-label">Select Input Type For Question</label>
											<div class="col-md-6">
												{!! Form::select('iid',$inputs,null,['placeholder'=>'Select Input Type','class' => 'form-control','required']) !!}
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<button type="submit" class="btn btn-color  pull-right">
													ADD
												</button>
											</div>
										</div>
										{!!Form::close()!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<ol class="">
						@foreach($questions as $question)
						<li>
							<p>{{$question->question}} ?</p>
						</li>
						@endforeach
					</ol>
					{!!$questions->render()!!}
				</div>
			</div>
		</div>		
	</div>
</div>
@stop