<?php

namespace Brainfood\controllers;
use Illuminate\Database\Capsule\Manager as DB;
use Brainfood\models\admin as Admin;
use Brainfood\models\categories as Categories;
use Brainfood\models\products as Products;
use Brainfood\models\splash as Splash;
use Brainfood\models\trending as Trending;
use Brainfood\models\users as Users;
use Brainfood\models\cart as Cart;
use Brainfood\models\reviews as Reviews;
use Brainfood\models\orders as Orders;

class UserCheckout extends BaseController {

    protected $_blade;
    protected $_validation_rules = [
         "phone" => "empty:|len:5:20|numeric:",
         "add" => "empty:|",
         "pcode" => "empty:|numeric:",
    ];

    public function showUserCheckout($id) {
    

        echo $this->_blade->render('usercheckout', ['cartlist'=>Cart::cartTable($id), 'prodid'=>Products::getProductsId($id), 'id'=>$id, 'totalItems'=> $this->_cartCount,'totalPrice'=> Cart::getTotal($id)]);
    }

    public function doCheckout($id) {

        $error = $this->_validator->isValid($this->_validation_rules); 
        $data = Cart::cartTable($_SESSION['user_id']);

        if(empty($error)) {

           //dump($data); exit();

           foreach ($data as $product) {

            $user = new Orders();

            $user->cart_id = $product->cart_id;
            $user->user_id = $_SESSION['user_id'];
            $user->product_id = $product->product_id;
            $user->quantity = $product->quantity;
            $user->phone = $_REQUEST['phone'];
            $user->address = $_REQUEST['add'];
            $user->postcode = $_REQUEST['pcode'];

            $user->save();

            DB::table('cart')->where('user_id', '=', $_SESSION['user_id'])->delete();

            }

            header("Location: /usercatalogue");

        }

    }

}
