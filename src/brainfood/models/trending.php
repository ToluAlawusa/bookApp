<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Trending extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'trending';
  protected $primaryKey = 'trending_id';

  public static function getTrending() {
    $trending = Trending::all();
    return $trending;
  }

  public static function getTrendingId($id) {
  	$trend = Trending::where("trending_id", '=', $id)->first();
  	return $trend;
  }

}
