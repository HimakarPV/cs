@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    {!!Form::open(['url'=>route('auth.login-post'),'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter email','id'=>'inputEmail','required'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Enter Password','required','id'=>'inputPassword'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox cb">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i>Login
                            </button>

                            <a class="btn btn-link" href="{{ route('auth.password') }}">Forgot Your Password?</a>
                            <p class="or-social">Or Use Social Login</p>
                            <a class="btn btn-lg btn-primary btn-block facebook" type="submit" href="{{route('social.redirect',['provider'=>'facebook'])}}">Facebook</a>
                            <a class="btn btn-lg btn-primary btn-block twitter" type="submit" href="{{route('social.redirect',['provider'=>'twitter'])}}">Twitter</a>
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
.or-social{
    text-align: center;
    margin:10px 0 10px 0;
}
.facebook{
    background-color: #4863ae;
    border-color: #4863ae;
}
.facebook:hover{
    background-color: #2871aa;
    border-color: #2871aa;
}
.twitter{
    border-color: #46c0fb;
    background-color: #46c0fb;
}
.twitter:hover{
    background-color: #00c7fb;
    border-color: #00c7fb;
}
</style>
@endsection
