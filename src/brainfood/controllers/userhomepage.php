<?php

namespace Brainfood\controllers;
use Brainfood\models\admin as Admin;
use Brainfood\models\categories as Categories;
use Brainfood\models\products as Products;
use Brainfood\models\splash as Splash;
use Brainfood\models\trending as Trending;


class UserHomePage extends BaseController {

    protected $_blade;
    /*protected $_validation_rules = [
         "cname" => "empty:|",
    ];*/

    public function showHomePage() {
    	
      echo $this->_blade->render('userhomepage', ['splash'=>Splash::getSplash(), 'trending'=>Trending::getTrending(), 
      	'totalItems'=> $this->_cartCount]);
    }
}
