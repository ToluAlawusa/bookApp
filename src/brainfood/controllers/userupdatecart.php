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

class UserUpdateCart extends BaseController {

    protected $_blade;
    protected $_validation_rules = [
         "quant" => "empty:|",
    ];

    public function updateCart($id) {

        $error = $this->_validator->isValid($this->_validation_rules); 
        $upd = "";
        $upd = $_SESSION['user_id'];

        if(empty($error)) {
            
            $quantity = Cart::find($_REQUEST['hid']);

            //dump($quantity); exit();
            $quantity->quantity = $_REQUEST['quant'];

            $quantity->save();

            header("Location: /usercart/$upd/");

        }
    }
}
