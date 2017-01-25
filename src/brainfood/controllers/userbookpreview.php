<?php

namespace Brainfood\controllers;
use Brainfood\models\admin as Admin;
use Brainfood\models\categories as Categories;
use Brainfood\models\products as Products;
use Brainfood\models\users as Users;
use Brainfood\models\reviews as Reviews;
use Brainfood\models\cart as Cart;

class UserBookPreview extends BaseController {

    protected $_blade;

    public function showBookPreview($id) {

        //dump(Reviews::getReviewsId($id)); exit();

        echo $this->_blade->render('userbookpreview', ['review'=>Reviews::getReviewsId($id), 'prodid'=>Products::getProductsId($id), 'id'=>$id, 'totalItems'=> $this->_cartCount]);
    
    }

    public function doAddComments($id) {


        if(isset($_SESSION['user_id'])) {
            $details = Users::getUsersId($_SESSION['user_id']);

            $user = new Reviews();

            $user->user_id = $_SESSION['user_id'];
            $user->product_id = $id ;
            $user->firstname = $details['firstname'];
            $user->lastname = $details['lastname'];
            $user->comments = $_REQUEST['comm'];
            $user->save();

            echo $this->_blade->render('userbookpreview', ['review'=>Reviews::getReviewsId($id), 'prodid'=>Products::getProductsId($id), 'id'=>$id]);
        } 
    }

}
