<?php

namespace Brainfood\controllers;
use Brainfood\models\users as Users;


class UserLogin extends BaseController {

	protected $_blade;
	protected $_validation_rules = [
        "email" => "empty:|!email:",
        "pass" => "empty:|",
    ];

	public function showUserLogin() {

        echo $this->_blade->render('userlogin');
	}

	public function doUserLogin() {
		$error = $this->_validator->isValid($this->_validation_rules);

		if(empty($error)){
         // ...we'll be back to do some stuffs with the datatbase
    		$user = new Users();
    		$user = Users::where('email', '=', $_REQUEST['email'])->get();
            $password = "";
            $user_id = "";

		foreach ($user as $user) {

            $password = $user->password;
            $user_id = $user->user_id;
            
        }

		 	$check = $this->validatePassword($_REQUEST['pass'], $password);

        if(!$check){

            $msg = "email or password incorrect";	
            echo $this->_blade->render('userlogin', ['msg'=>$msg]);

        } else {
            $_SESSION['user_id'] = $user_id;

            header("Location: /usercatalogue");
        }

		} else {

		 	echo $this->_blade->render('userlogin', ['errors'=>$error]);
		}
	}

	private function validatePassword($pass, $hash){
        return password_verify($pass, $hash);

    }
}

