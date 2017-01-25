<?php

namespace Brainfood\libs;
use Respect\Validation\Validator as v;

class Validator{

	public function isValid($rules) {

		$error = [];

		foreach($rules as $name => $rule){
			$explode = explode("|", $rule);

			foreach($explode as $method){
				$real_rules = explode(":", $method);


				switch($real_rules[0]){
					case "min":
						if(v::min($real_rules['1'])->validate($_REQUEST[$name]) == false){
							$error[$name] = "minimum number of characters needed is". $real_rules[1];
						} 
					break;

					case "max":
					    if(v::max($real_rules['1'])->validate($_REQUEST[$name]) == false){
					    	$error[$name] = "maximum number of characters allowed is". $real_rules[1];
					    }
					break;

					case "empty":
					    if(v::notEmpty()->validate($_REQUEST[$name]) == false){
					    	$error[$name] = "field cannot be empty";
					    }
					break;

					case "!numeric":
					    if(v::numeric()->validate($_REQUEST[$name]) == true){
					    	$error[$name] = "field cannot be numeric";
					    }
					break; 

					case "len":
					    if(v::length($real_rules[1], $real_rules[2])->validate($_REQUEST[$name]) == false){
	                        $error[$name] = "minimum character length is". $real_rules[1]. "maximum character length is".$real_rules[2];

                        }
                    break;
                    
                    case "!email":
                        if(v::email()->validate($_REQUEST[$name]) == false){
                        	$error[$name] = "invalid email format";
                        }
                    break;

                    case "alnum":
                        if(v::alnum()->validate($_REQUEST[$name]) == false){
                        	$error[$name] = "characters entered must be alphanumeric";
                        }
                    break;

                    case "equal":
                        if(v::equals($_REQUEST[$real_rules[1]])->validate($_REQUEST[$name]) == false){
                            $error[$name] = "passwords do not match";
                        }
                    break;                  
				}
			}
		}

		 return $error;

	}
}
