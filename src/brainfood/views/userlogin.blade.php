@extends('base')
@section('browsertitle')userlogin @stop
@section('content')

  <div class="login-form">
      <form class="def-modal-form" action="/userlogin" method="POST">
        
        <label for="login-form" class="header"><h3>Login</h3></label>

        @if(isset($msg)) <span class="err">{!! $msg !!}</span> @endif

	      @if(isset($errors['email'])) <span class="err">{!! $errors['email'] !!}</span> @endif

        <input type="text" class="text-field email" name="email" placeholder="Email">
        
        @if(isset($msg)) <span class="err">{!! $msg !!}</span> @endif

	      @if(isset($errors['pass'])) <span class="err">{!! $errors['pass'] !!}</span> @endif

        <input type="password" class="text-field password" name="pass" placeholder="Password">
        <!--clear the error and use it later just to show you how it works -->
        
        <input type="submit" class="def-button login" name="login" value="Login">
      </form>
    
  </div>

 @stop
