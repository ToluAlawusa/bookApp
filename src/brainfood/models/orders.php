<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Orders extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'orders';
  protected $primaryKey = 'orders_id';

  public static function getOrders() {
    $order = Orders::all();
    return $order;
  }

  public static function getOrdersId($id) {
  	$ordersid = Orders::where("orders_id", '=', $id)->first();
  	return $ordersid;
  }

}
