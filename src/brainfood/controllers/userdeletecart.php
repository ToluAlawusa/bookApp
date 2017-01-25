<?php

namespace Brainfood\controllers;
use Brainfood\models\admin as Admin;
use Brainfood\models\categories as Categories;
use Brainfood\models\products as Products;
use Brainfood\models\splash as Splash;
use Brainfood\models\trending as Trending;
use Brainfood\models\users as Users;
use Brainfood\models\cart as Cart;
use Brainfood\models\reviews as Reviews;

class UserDeleteCart extends BaseController {

    protected $_blade;

    public function deleteCart($id) {
    	
    	$uid = $_SESSION['user_id'];

    	if(empty($error)) {
    	$cart = Cart::find($_REQUEST['delhid']);

         $cart->delete();

         header("Location: /usercart/$uid/");

     	}

    }
}
