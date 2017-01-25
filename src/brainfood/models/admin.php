<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Admin extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'admin';
  protected $primaryKey = 'admin_id';

  public static function getAdmin() {
    $admin = Admin::all();
    return $admin;
  }

  public static function getAdminId($id) {
  	$adminid = Admin::where("admin_id", '=', $id)->first();
  	return $adminid;
  }
}
