<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Users extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'users';
  protected $primaryKey = 'user_id';

  public static function getUsers() {
        $users = Users::all();
        return $users;
  }

  public static function getUsersId($id) {
  		$customer = Users::where("user_id", '=', $id)->first();
  		return $customer;
  }

}
