@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    {!!Form::open(['url'=>route('auth.password-post'),'class'=>'form-horizontal','role'=>'form'])!!}

                    @include('includes.status')

                    <label for="inputEmail" class="sr-only">Email address</label>
                    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email address','autofocus','id'=>'inputEmail'])!!}
                    <br>
                    <button class="btn btn-md btn-primary btn-block" type="submit">Send me a reset link</button>

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
