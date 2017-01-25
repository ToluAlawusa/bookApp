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
use Brainfood\models\orders as Orders;

class UserLogout extends BaseController {

	public function logout() {

		$_SESSION = [];

		unset($_SESSION);

		session_destroy();

		header("Location: /userlogin"); //We redirect to admin_login page
    }
}
