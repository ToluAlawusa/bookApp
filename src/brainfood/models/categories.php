<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Categories extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'categories';
  protected $primaryKey = 'category_id';

  public static function getCategories() {
    $cat = Categories::all();
    return $cat;
  }

  public static function getCategory($id) {
  	$caty = Categories::where("category_id", '=', $id)->get();
  	return $caty;
  }
}
