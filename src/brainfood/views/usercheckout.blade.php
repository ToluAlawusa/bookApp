@extends('base')
@section('browsertitle')usercheckout @stop
@section('content')


<div class="checkout-form">
  <form class="def-modal-form" action="/usercheckout/{!! $id !!}/" method="POST">
    <div class="total-cost">
      <h3> TOTAL : ${!! $totalPrice !!}</h3>
    </div>
    <div class="cancel-icon close-form"></div>
    <label for="login-form" class="header"><h3>Checkout</h3></label>

    @if(isset($errors['phone'])) <span class="err">{!! $errors['phone'] !!}</span> @endif
    <input type="text" class="text-field phone" name="phone" placeholder="Phone Number">

    @if(isset($errors['add'])) <span class="err">{!! $errors['add'] !!}</span> @endif
    <input type="text" class="text-field address" name="add" placeholder="Address">

    @if(isset($errors['pcode'])) <span class="err">{!! $errors['pcode'] !!}</span> @endif
    <input type="text" class="text-field post-code" name="pcode" placeholder="Post Code">
    <input type="submit" class="def-button checkout" value="Checkout">
  </form>
</div>

@stop
