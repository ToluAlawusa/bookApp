<?php

namespace Brainfood\controllers;
use Brainfood\models\users as Users;


class UserRegistration extends BaseController {

	protected $_blade;
	protected $_validation_rules = [
         "fn" => "empty:|len:3:10|!numeric:",
         "ln" => "empty:|len:3:10|!numeric:",
         "em" => "empty:|!email:|",
         "un" => "empty:|len:3:10|",
         "pass" => "empty:|len:9:15|",
         "cpass" => "equal:pass|",
	];

	public function showUserRegister() {
         echo $this->_blade->render('userregistration');
	}

	public function doUserRegister() {
	 	$error = $this->_validator->isValid($this->_validation_rules);
	 
	 	if(empty($error)){
         // ...we'll be back to do some stuffs with the datatbase
	 	$user = new Users();
	 	$user->firstname = $_REQUEST['fn'];
	 	$user->lastname = $_REQUEST['ln'];
	 	$user->email = $_REQUEST['em'];
	 	$user->username = $_REQUEST['un'];
	 	$user->password = $this->hashPassword($_REQUEST['cpass']);
	 	$user->save();

	 	header("Location: /userlogin");


	 	} else {

	 	echo $this->_blade->render('userregistration', ['errors'=>$error]);
	 	
	 	}
	}

	private function hashPassword($password){
    	return password_hash($password, PASSWORD_BCRYPT);
    }
}


