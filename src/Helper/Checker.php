<?php
namespace App\Helper;

class Checker
{
	private $isValid = false;

	public function isValid($val = 'B'){
		if($val == 'A')
			return 'Great';
		return 'Oops';
	}
}