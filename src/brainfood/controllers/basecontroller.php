<?php

namespace Brainfood\controllers;

use duncan3dc\Laravel\BladeInstance;
use Brainfood\libs\Validator as Valid;
use Brainfood\models\cart as Cart;

class BaseController {

	protected $_blade;
	protected $_validator;
	protected $_cartCount;

	public function __construct(){
		$this->_validator = new Valid;
		$this->_blade = new BladeInstance($_ENV['APP_PATH']."/views", $_ENV['APP_HOME']."/cache/views");

		if(isset($_SESSION['user_id'])) {

			$getTotal = Cart::cartCount($_SESSION['user_id']);
			$this->_cartCount = ( $getTotal > 0) ? $getTotal : 0;
		}
	}
}
