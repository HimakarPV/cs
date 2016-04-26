@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="col-md-12 col-xs-12">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 blockbody">
        <div>
          <h1 class="text-center">CRIME REPORT</h1><br>
          <p><strong>If this is an emergency, please call 100 now.</strong></p>
          <p>Reporting is confidential, we only need your information to solve crime, not your name.</p>
        </div>
        <div>

          <div>
            {!! Form::open(array('action' => array('PublicController@show')))!!}
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
                      <input value="{{$crimeType->id}}" type="checkbox" name="id[]"> {{$crimeType->type}}
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
                <input type="submit" value="Next" class="btn btn-default">
              </div>
            </div>
          </div>
          {!!Form::close()!!}
        </div>
      </div>
    </div>
  </div>
</div>
@stop