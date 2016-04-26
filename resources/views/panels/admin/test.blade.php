@extends('panels.admin.main')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-3" style="padding: 0px;">
			<div class="col-md-12 selement">
				<div class="block">
					<h4>Steps<a href="#" class="pull-right" data-placement="right" data-toggle="popover"  data-html="true" id="spopover"><img width="18px" src="/uploads/plus.png"></a></h4>
					<span></span>
					<hr>

					<div id="popover-content" class="hide">
						<form class="form-inline" role="form">
							<div class="form-group">
								{!!Form::text(null,null,['class'=>'form-control','placeholder'=>'Step','required','maxlength'=>'6','ng-model'=>'formdata.step'])!!}
								<button type="submit" ng-click="addStep(formdata)" class="btn btn-primary">Add »</button>
							</div>

						</form>
					</div>
					<ul class="list-unstyled">
						<div ng-repeat="step in steps">
						<li>
							<p><% step.step %></p>
						</li>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-md-12 ctelement">
				<div class="block">
					<h4>Crime Types<a href="#" class="pull-right" data-placement="right" data-toggle="popover" data-html="true" data-animation="true" id="ctpopover"><img width="18px" src="/uploads/plus.png"></a></h4>
					<span></span>
					<hr>
					<div id="ctpopover-content" class="hide">
						<form class="form-inline test" role="form">
							<div class="form-group">
								{!!Form::text(null,null,['class'=>'form-control','placeholder'=>'Crime Type','required','maxlength'=>'5'])!!}
								<button type="submit" class="btn btn-primary">Add »</button> 
							</div>
						</form>
					</div>
					<ul class="list-unstyled">
						@foreach($crimetypes as $type)
						<li>
							<p>{{$type->type}}</p>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-9" style="padding: 0px;">
			<div class="col-md-12">
				<div class="block">
					<h4>Questions<a href="#questionModal" class="pull-right" data-toggle="modal"><img width="18px" src="/uploads/plus.png"></a></h4>
					<span></span>
					<hr>
					<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="questionModal">
						<div class="modal-dialog">
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
											<div class="col-md-6 col-md-offset-4">
												<button type="submit" class="btn btn-primary-outline  pull-right">
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
<div class="row">
	<div class="col-md-12">
		<h2>Admin Panel Home Page</h2>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<a href="#myModal" id="pause-slide" data-toggle="modal">
						<div align="center">
							<span class="overlay" ></span>
							<img src="/uploads/video1.png" class="center-block img-responsive img-fluid">
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#myModal" id="pause-slide" data-toggle="modal">
						<div align="center">
							<span class="overlay" ></span>
							<img src="/uploads/video2.png" class="center-block img-responsive img-fluid">
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#myModal" id="pause-slide" data-toggle="modal">
						<div align="center">
							<span class="overlay" ></span>
							<img src="/uploads/video3.png" class="center-block img-responsive img-fluid">
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#myModal" id="pause-slide" data-toggle="modal">
						<div align="center">
							<span class="overlay" ></span>
							<img src="/uploads/video4.png" class="center-block img-responsive img-fluid">
						</div>
					</a>
				</div>
			</div>
			
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			
		</div>
	</div>

	<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
               <!--  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">YouTube Video</h4>
                </div> -->
                <div class="modal-body">
                	<div class="embed-responsive embed-responsive-16by9">
                		<iframe id="reversalVideo" class="embed-responsive-item" width="100%" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4/?" allowfullscreen></iframe>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#spopover").popover({
			container:'.selement',
			html: true, 
			content: function() {
				return $('#popover-content').html();
			}
		});
		$("#ctpopover").popover({
			container:'.ctelement',
			html: true,
			content: function(){
				return $('#ctpopover-content').html();
			}
		});
		$('body').on('click', function (e) {
			$('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
        	$(this).popover('hide');
        }
    });
		});

		// Stops the carousel
		$("#pause-slide").click(function(){
			$("#myCarousel").carousel('pause');
		});
		// Initializes the carousel
		// $(".start-slide").click(function(){
		// 	$("#myCarousel").carousel('cycle');
		// });
		// // Cycles to the previous item
		// $(".prev-slide").click(function(){
		// 	$("#myCarousel").carousel('prev');
		// });
		// // Cycles to the next item
		// $(".next-slide").click(function(){
		// 	$("#myCarousel").carousel('next');
		// });

	    /* Get iframe src attribute value i.e. YouTube video url
	    and store it in a variable */
	    var url = $("#reversalVideo").attr('src');
	    
	    /* Assign empty url value to the iframe src attribute when
	    modal hide, which stop the video playing */
	    $("#myModal").on('hide.bs.modal', function(){
	    	$("#reversalVideo").attr('src', '');
	    	$("#myCarousel").carousel('cycle'); // Start the slide
	    });
	    
	    /* Assign the initially stored url back to the iframe src
	    attribute when modal is displayed again */
	    $("#myModal").on('show.bs.modal', function(){
	    	
	    	$("#reversalVideo").attr('src', url);
	    	$("#myCarousel").carousel('pause'); // Pause the slide

	    	var vid = document.getElementById("reversalVideo"); 

	    	$(document).keypress(function(e){	
	    		if (e.which == 27 && url != null) {
	    			function pauseVid() { 
	    				vid.pause(); 
	    			}
	    			$("#myModal").on('hide.bs.modal', function(){
	    				$("#reversalVideo").attr('src', '');
	    				$("#myCarousel").carousel('cycle'); // Start the slide
	    			});
	    		}
	    	});
	    });
	});
</script>
@stop