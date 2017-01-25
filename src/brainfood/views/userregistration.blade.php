@extends('base')
@section('browsertitle')userregistration @stop
@section('content')

<div class="registration-form">
      <form class="def-modal-form" action="/userregistration" method="POST">
        <div class="cancel-icon close-form"></div>

        <label for="registration-from" class="header"><h3>User Registration</h3></label>

   		@if(isset($errors['fn'])) <span class="err">{!! $errors['fn'] !!}</span> @endif
        <input type="text" class="text-field first-name" name="fn" placeholder="Firstname">
        
        @if(isset($errors['ln'])) <span class="err">{!! $errors['ln'] !!}</span> @endif
        <input type="text" class="text-field last-name" name="ln" placeholder="Lastname">
        
        @if(isset($errors['em'])) <span class="err">{!! $errors['em'] !!}</span> @endif
        <input type="email" class="text-field email" name="em" placeholder="Email">
       
        @if(isset($errors['un'])) <span class="err">{!! $errors['un'] !!}</span> @endif
        <input type="text" class="text-field username" name="un" placeholder="Username">
        
        @if(isset($errors['pass'])) <span class="err">{!! $errors['pass'] !!}</span> @endif
        <input type="password" class="text-field password" name="pass" placeholder="Password">
        
        @if(isset($errors['cpass'])) <span class="err">{!! $errors['cpass'] !!}</span> @endif
        <input type="password" class="text-field confirm-password" name="cpass" placeholder="Confirm Password">
        
        <input type="submit" class="def-button" name="reg" value="Register">

        <p class="login-option"><a href="/userlogin"> Have an account already? Login</a></p>
      </form>
</div>



















@stop