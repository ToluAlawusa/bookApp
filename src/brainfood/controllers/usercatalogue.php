<?php

namespace Brainfood\controllers;
use Brainfood\models\admin as Admin;
use Brainfood\models\categories as Categories;
use Brainfood\models\products as Products;
use Brainfood\models\splash as Splash;
use Brainfood\models\trending as Trending;
use Brainfood\models\users as Users;


class UserCatalogue extends BaseController {

    protected $_blade;
    /*protected $_validation_rules = [
         "cname" => "empty:|",
    ];*/

    public function showUserCatalogue() {
        echo $this->_blade->render('usercatalogue', ['prod'=>Products::getProducts(), 'cat'=>Categories::getCategories(), 'totalItems'=> $this->_cartCount]);
    }

    public function showCategories($id) {
    	echo $this->_blade->render('usercatalogue', ['prod'=>Products::showProductsById($id), 'cat'=>Categories::getCategories(), 'totalItems'=> $this->_cartCount]);
    }

}
