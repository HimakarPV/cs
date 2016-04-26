@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!!Form::open(['url'=>route('auth.register-post'),'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputName" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Name','required','id'=>'inputName'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter email','id'=>'inputEmail','required'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input for="inputPassword" required id="inputPassword" type="password" class="form-control" name="password">


                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPasswordConfirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" for="inputPasswordConfirm" id="inputPasswordConfirm" required class="form-control" name="password_confirmation">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Register
                            </button>
                        </div>
                    </div>

                    <p>Or Use Social Login</p>

                    <a href="{{route('social.redirect',['provider'=>'facebook'])}}" class="btn btn-md btn-primary">Facebook</a>

                    <a href="{{route('social.redirect',['provider'=>'twitter'])}}" class="btn btn-md btn-primary">Twitter</a>

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
