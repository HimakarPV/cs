@extends('layouts.master')
@section('content')
<div class="container-fluid" ng-controller="formController">
  <div class="col-md-12 col-xs-12">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 blockbody">
        <div>
          <h1 class="text-center">CRIME REPORT</h1><br>
          <p><strong>If this is an emergency, please call 100 now.</strong></p>
          <p>Reporting is confidential, we only need your information to solve crime, not your name.</p>
        </div>
        <div>
          <div ng-show="div1">
            <div>
              {!! Form::open(array('method'=>'POST','url'=>'/form','id'=>'formid'))!!}
              <div class="col-md-12 row">
                <h2>Step - 1 : Crime Type</h2>
                <hr>
                <h3>What Type Of Crime Do You Have Information On?</h3>
                <br><p>Please select the relevant check boxes below.</p>
              </div>
              @foreach($crimetypes as $crimeType)
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li>
                    <div class="checkbox">
                      <label>
                        <input value="{{$crimeType->id}}" type="checkbox" name="id[]" id="checkid"> {{$crimeType->type}}
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
              @endforeach
              <div class="col-md-12 row">
                <div class="form-group">
                  <br>
                  <hr>
                  <input type="submit" ng-click="click1()" value="Next" class="btn btn-default">
                </div>
              </div>
              {!!Form::close()!!}
            </div>
          </div>

          <div id="ajaxform">
            <div ng-show="div2">
              <div class="col-md-12 row">
                <h2>Step - 2 : Crime Details</h2>
                <hr>
                <h3>Can You Tell Us About The Crime</h3>
                <br>
                <h5><strong>@if (!empty($step1[0])) ? {{$step1[0]->question}} : ''@endif?</strong></h5>
                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-3">
                      <input type="number" class="form-control nbr" placeholder="xxx-xxx-xxx">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <h5><strong>@if (!empty($step1[1])) ? {{$step1[1]->question}} : ''@endif?</strong></h5>
                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-3">
                      <input type="number" class="form-control nbr" placeholder="xxx-xxx-xxx">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <h5><strong>@if (!empty($step1[2])) ? {{$step1[2]->question}} : ''@endif?</strong></h5>
                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-3">
                      <input type="textarea" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <div class="row">
                  <br>
                  <hr>
                  <div class="form-group col-md-2">
                    <button ng-click="click2()" class="btn btn-default">Next</button>
                  </div>
                  <div class="form-group col-md-offset-10">
                    <button ng-click="click2()" class="btn btn-primary">Skip</button>
                  </div>
                </div>
              </div>
            </div>
            <div ng-show="div3">
              <div class="col-md-12 row">
                <h2>Step - 3 : Offender Identity</h2>
                <hr>
                <h3>Can You Tell Us About The Offenders Identity?</h3>
                <br>

                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-12">
                      <label>First Name</label>
                      <input type="text" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-12">
                      <label>Last Name</label>
                      <input type="text" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-12">
                      <label>Address</label>
                      <input type="textarea" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-12">
                      <label>Date Of Birth / Approx. Age</label>
                      <input type="text" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <h5><strong>@if (!empty($step2[1])) ? {{$step2[1]->question}} : ''@endif?</strong></h5>
                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-3">
                      <input type="textarea" class="form-control nbr" placeholder="What are they? Where they convicted?">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-12">
                      <label>@if (!empty($step2[2])) ? {{$step2[2]->question}} : ''@endif?</label>
                      <input type="textarea" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>

                <div class="row">
                  <br>
                  <hr>
                  <div class="form-group col-md-2">
                    <button ng-click="click3()" class="btn btn-default">Next</button>
                  </div>
                  <div class="form-group col-md-offset-10">
                    <button ng-click="click3()" class="btn btn-primary">Skip</button>
                  </div>
                </div>
              </div>
            </div>
            <div ng-show="div4">
              <h2>Step - 4 : Offender Description</h2>
              <hr>
              <h3>Can You Tell Us About The Offenders Description?</h3>
              <br>
              @if(!empty($step3))
              @foreach($step3 as $step)
              <h5><strong>?</strong></h5>
              <div class="row">
                <div class="control-group">
                  <div class="form-group col-md-3">
                    <input type="textarea" class="form-control nbr">
                  </div>
                  <div class="col-md-9"></div>
                </div>
              </div>
              @endforeach
              @endif
              <div class="row">
                <div class="form-group col-md-2">
                  <button ng-click="click4()" class="btn btn-default">Next</button>
                </div>
                <div class="form-group col-md-offset-10">
                  <button ng-click="click4()" class="btn btn-primary">Skip</button>
                </div>
              </div>
            </div>
            <div ng-show="div5">
              <h2>Step - 5 : The Offender's Vehicle</h2>
              <hr>
              <h3>Can You Tell Us About The Offender's Vehicle?</h3>
              <br>
              @if(!empty($step4))
              @foreach($step4 as $step)
              <h5><strong>?</strong></h5>
              <div class="row">
                <div class="control-group">
                  <div class="form-group col-md-3">
                    <input type="textarea" class="form-control nbr">
                  </div>
                  <div class="col-md-9"></div>
                </div>
              </div>
              @endforeach
              @endif
              <div class="row">
                <div class="form-group col-md-2">
                  <button ng-click="click5()" class="btn btn-default">Next</button>
                </div>
                <div class="form-group col-md-offset-10">
                  <button ng-click="click5()" class="btn btn-primary">Skip</button>
                </div>
              </div>
            </div>
            <div ng-show="div6">
              <h2>Step - 6 : Additional Information</h2>
              <hr>
              <h3>Can You Tell Us Anything Else?</h3>
              <br>
              @if(!empty($step5))
              @foreach($step5 as $step)
              <h5><strong>?</strong></h5>
              <div class="row">
                <div class="control-group">
                  <div class="form-group col-md-3">
                    <input type="textarea" class="form-control nbr">
                  </div>
                  <div class="col-md-9"></div>
                </div>
              </div>
              @endforeach
              @endif
              <div class="row">
                <div class="form-group col-md-2">
                  <button ng-click="click6()" class="btn btn-default">Next</button>
                </div>
                <div class="form-group col-md-offset-10">
                  <button ng-click="click6()" class="btn btn-primary">Skip</button>
                </div>
              </div>
            </div>
            <div ng-show="div7">
              <h2>Step - 7 : Review Report</h2>
              {!! Form::open(array('action' => array('PublicController@index')))!!}
              <hr>

              <br>

              <div class="form-group">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('[name="_token"]').val()
    }
  });
  $(document).ready(function(){
    $('#formid').on('submit', function(e){
      e.preventDefault();

      var id = new Array();

      $('input[name="id[]"]:checked').each(function()
      {
        id.push($(this).val());
      });
console.log({id});
      var $form = $('form');
      $.ajax({
        url:$form.attr('url'),
        type: $form.attr('method'),
        data: {id},
        dataType:'json',
        // traditional:true
        success: function(data){
          console.log(data);
        }
        // success: function(data){
        //   var step1 = data.step1;
        //   var step2 = data.step2;
        //   var step3 = data.step3;
        //   var step4 = data.step4;
        //   var step5 = data.step5;

        //   // var dataToStore = JSON.stringify(data);
        //   // localStorage.setItem('test', dataToStore);



        // // console.log(step1);
          // $('#ajaxform').append(data);
        // }
      });
    });
  });
</script>
@stop