<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Splash extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'splash';
  protected $primaryKey = 'splash_id';

  public static function getSplash() {
    $splash = Splash::all();
    return $splash;
  }

  public static function getSplashId($id) {
  	$splashid = Splash::where("splash_id", '=', $id)->first();
  	return $splashid;
  }

}
