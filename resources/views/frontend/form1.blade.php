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
              <form novalidate>
                <div class="col-md-12 row">
                  <h2>Step - 1 : Crime Type</h2>
                  <hr>
                  <h3>What Type Of Crime Do You Have Information On?</h3>
                  <br><p>Please select the relevant check boxes below.</p>
                </div>

                <div ng-repeat="crimeType in crimeTypes">
                  <div class="col-md-4">
                    <ul class="list-unstyled">
                      <li>
                        <div class="checkbox">
                          <input required type="checkbox" value="<%crimeType.id%>" ng-model="selection[crimeType.id]" id="<%crimeType.type%>"/> 
                          <label for="<%crimeType.type%>"><% crimeType.type %></label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 row">
                  <div class="form-group">
                    <br>
                    <hr>
                    <input type="submit" ng-click="click1(selection)" value="Next" class="btn btn-default">
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div id="ajaxform">
            <div ng-show="div2">
              <div class="col-md-12 row">
                <h2>Step - 2 : Crime Details</h2>
                <hr>
                <h3>Can You Tell Us About The Crime</h3>
                <br>
                <div ng-repeat="questions in step1">
                  <h5><strong><% questions.question %>?</strong></h5>
                  <div class="row">
                    <div class="control-group">
                      <div class="form-group col-md-3">
                        <input type="number" class="form-control nbr" required placeholder="xxx-xxx-xxx">
                      </div>
                      <div class="col-md-9"></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <br>
                  <hr>
                  <div class="form-group col-md-2">
                    <button ng-click="bclick2()" type="button" class="btn btn-default">Back</button>
                  </div>
                  <div class="form-group col-md-2">
                    <button ng-click="click2()" type="button" class="btn btn-default">Next</button>
                  </div>
                  <div class="form-group col-md-2 pull-right">
                    <button ng-click="click2()" type="button" class="btn btn-primary">Skip</button>
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
                <div ng-repeat="questions in step2">
                  <h5><strong><% questions.question %>?</strong></h5>
                  <div class="row">
                    <div class="control-group">
                      <div class="form-group col-md-12">
                        <!-- <label>First Name</label> -->
                        <input type="text" required class="form-control nbr">
                      </div>
                      <div class="col-md-9"></div>
                    </div>
                  </div>
                </div>
              <!--   <div class="row">
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

                <h5><strong>?</strong></h5>
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
                      <label>?</label>
                      <input type="textarea" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div> -->

                <div class="row">
                  <br>
                  <hr>
                  <div class="form-group col-md-2">
                    <button ng-click="bclick3()" type="button" class="btn btn-default">Back</button>
                  </div>
                  <div class="form-group col-md-2">
                    <button ng-click="click3()" type="button" class="btn btn-default">Next</button>
                  </div>
                  <div class="form-group col-md-2 pull-right">
                    <button ng-click="click3()" type="button" class="btn btn-primary">Skip</button>
                  </div>
                </div>
              </div>
            </div>
            <div ng-show="div4">
              <h2>Step - 4 : Offender Description</h2>
              <hr>
              <h3>Can You Tell Us About The Offenders Description?</h3>
              <br>

              <div ng-repeat="questions in step3">
                <h5><strong><% questions.question %>?</strong></h5>
                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-3">
                      <input type="textarea" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="form-group col-md-2">
                    <button ng-click="bclick4()" type="button" class="btn btn-default">Back</button>
                  </div>
                <div class="form-group col-md-2">
                  <button ng-click="click4()" type="button" class="btn btn-default">Next</button>
                </div>
                <div class="form-group col-md-2 pull-right">
                  <button ng-click="click4()" type="button" class="btn btn-primary">Skip</button>
                </div>
              </div>
            </div>
            <div ng-show="div5">
              <h2>Step - 5 : The Offender's Vehicle</h2>
              <hr>
              <h3>Can You Tell Us About The Offender's Vehicle?</h3>
              <br>
              
              <div ng-repeat="questions in step4">
                <h5><strong><% questions.question %>?</strong></h5>
                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-3">
                      <input type="textarea" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>
              </div>
              

              <div class="row">
              <div class="form-group col-md-2">
                    <button ng-click="bclick5()" type="button" class="btn btn-default">Back</button>
                  </div>
                <div class="form-group col-md-2">
                  <button ng-click="click5()" type="button" class="btn btn-default">Next</button>
                </div>
                <div class="form-group col-md-2 pull-right">
                  <button ng-click="click5()" type="button" class="btn btn-primary">Skip</button>
                </div>
              </div>
            </div>
            <div ng-show="div6">
              <h2>Step - 6 : Additional Information</h2>
              <hr>
              <h3>Can You Tell Us Anything Else?</h3>
              <br>

              <div ng-repeat="questions in step5">
                <h5><strong><% questions.question %>?</strong></h5>
                <div class="row">
                  <div class="control-group">
                    <div class="form-group col-md-3">
                      <input type="textarea" class="form-control nbr">
                    </div>
                    <div class="col-md-9"></div>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-md-2">
                    <button ng-click="bclick6()" type="button" class="btn btn-default">Back</button>
                  </div>
                <div class="form-group col-md-2">
                  <button ng-click="click6()" type="button" class="btn btn-default">Next</button>
                </div>
                <div class="form-group col-md-2 pull-right">
                  <button ng-click="click6()" type="button" class="btn btn-primary">Skip</button>
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
@stop