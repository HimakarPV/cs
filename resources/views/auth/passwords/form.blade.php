@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password Form</div>

                <div class="panel-body">
                    {!!Form::open(['url'=>route('auth.reset-post',['token'=>$token]),'class'=>'form-horizontal','role'=>'form'])!!}

                    @include('includes.errors')

                   {{--  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div> --}}

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="inputPassword" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Password','required','id'=>'inputPassword','autofocus'])!!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="inputPasswordConfirmation" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Password Confirmation','required','id'=>'inputPasswordConfirmation'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-refresh"></i>Reset Password
                            </button>
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
