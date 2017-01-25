<?php

namespace Brainfood\models;

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model as Eloquent;
//use Illuminate\Support\Facades\DB;

class Cart extends Eloquent 
{

  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'cart';
  protected $primaryKey = 'cart_id';

  public static function getCartId($id) {
  	$cartid = Cart::where("cart_id", $id)->get();
  	return $cartid;
  }

  public static function cartTable($user_id) {
    $cart = DB::table('cart')
    ->join('products', function($join){
      $join->on('cart.product_id', '=', 'products.product_id');

      })->where('user_id', '=', $user_id)
    ->get();

    return $cart;
  }

  public static function checkProduct($id) {

    $result = false;

    $cproduct = DB::table('cart')->where('product_id', '=', $id)
    ->where('user_id', '=', $_SESSION['user_id'])->get()->count();

    if($cproduct > 0){
      $result = true;
    }
    return $result;  
  }

  public static function cartCount($id) {

    $chkcount = DB::table('cart')->where('user_id', '=', $id)->get()->count();

    return $chkcount;

  }

  public static function getTotal($id) {
    $cartlist = Cart::cartTable($id);
    $total = 0;

    foreach ($cartlist as $cartItem) {
      $total += $cartItem->quantity * $cartItem->price;
    }
    return $total;
  }
}
