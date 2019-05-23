@extends('layouts.app')

@section('content')
<div id="auth">
    <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>

    <div id="auth-form">
      <div class="container">
        <div class="row">
            
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    
                    <div class="form-group ingrp-field">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border: none;"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="email" class="email-set" name="email" placeholder="Email" value="{{old('email')}}">
                        </div>
                       <div>
                        @if($errors->has('email'))
                          <span style="color: red; font-size: 14px;">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    </div>
                    <div class="form-group ingrp-field">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"  style="border: none;"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
                        </div>
                        <div>
                            @if($errors->has('password'))
                              <span style="color: red; font-size: 14px;">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group ingrp-field">
                        <div class="input-group">
                            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                        </div>
                    </div>

                </form> 

                <div id="auth-heading">
                    <a href="{{url('/')}}"><h4>SUN RISE HOMEPAGE</h4></a>
                </div>
        </div>
     </div>
    </div>
</div>

 
@endsection
