@extends('base')
@section('browsertitle')usercart @stop
@section('content')

    <div class="main">
    <table class="cart-table">
      <thead>
        <tr>
          <th><h3>Item</h3></th>
          <th><h3>Price</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Total</h3></th>
          <th><h3>Update</h3></th>
          <th><h3>Remove</h3></th>
        </tr>
      </thead>
      <tbody>
       @foreach ($cartlist as $cartlist)
        <tr>

          <td><a href="/userbookpreview/{!! $cartlist->product_id !!}/"><div class="book-cover b1" style="background: url({!! $cartlist->image !!}) 
           no-repeat center; background-size: cover; width: 81px;
           height: 100px;"></div></a></td>
          <td><p class="book-price">{!! $cartlist->price !!}</p></td>
          <td><p class="quantity">{!! $cartlist->quantity !!}</p></td>
          <td><p class="total">{!! $cartlist->quantity * $cartlist->price !!}</p></td>
          <td>
            <form class="update" action="/userupdatecart/{!! $id !!}/" method="POST">
            <input type="number" name="quant" class="text-field qty">
            <input type="hidden" value="{!!$cartlist->cart_id!!}" name="hid">
            <input type="submit" name="cquan" class="def-button change-qty" value="Change Qty">
            </form>
          </td>
          <td>
            <form action="/userdeletecart/{!! $id !!}/" method="POST">
            <input type="hidden" value="{!!$cartlist->cart_id!!}" name="delhid">
            <a href="/deletecart/{!! $cartlist->product_id !!}/"><button class="def-button remove-item">Remove Item</button></a>
            </form>
          </td>
             
        </tr>
       @endforeach
      </tbody>
    </table>
    <div class="cart-table-actions">
      <button class="def-button previous">previous</button>
      <button class="def-button next">next</button>
      <div class="index">
        <a href="#"><p>1</p></a>
        <a href="#"><p>2</p></a>
        <a href="#"><p>3</p></a>
      </div>
      <a href="/usercheckout/{!! $_SESSION['user_id'] !!}/"><button class="def-button checkout">Checkout</button></a>
    </div>
  </div>

  @stop
