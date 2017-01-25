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

class UserCart extends BaseController {

    protected $_blade;
    protected $_validation_rules = [
         "quan" => "empty:|",
    ];

    public function showUserCart($id) {
        
        echo $this->_blade->render('usercart', ['cartlist'=>Cart::cartTable($id), 'prodid'=>Products::getProductsId($id), 'id'=>$id, 'totalItems'=> $this->_cartCount]);
    }

    public function addToCart($id) {

        $udd = $_SESSION['user_id'];

    	if(isset($_SESSION['user_id'])) {

            $chk = Cart::checkProduct($id);

            if($chk){

                header("Location: /usercart/$udd/");

            } else {
            
        		$cart = new Cart;
        		$cart->product_id = $id;
        		$cart->user_id = $_SESSION['user_id'];
        		$cart->quantity = $_REQUEST['quan'];

        		$cart->save();

                header("Location: /userbookpreview/$id/");
            }

    	} else {

    		header("Location: /userlogin");
    	}
    }
}
