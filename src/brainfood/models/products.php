<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Products extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'products';
  protected $primaryKey = 'product_id';

  public static function getProducts() {
    $prod = Products::all();
    return $prod;
  }

  public static function getProductsId($id) {
  	$prodid = Products::where("product_id", '=', $id)->first();
  	return $prodid;
  }

  public static function showProductsById($id) {
    $showp = Products::where('category_id', '=', $id)->get();
    return $showp;
  }


}
