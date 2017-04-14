<?php

class Config
{
<<<<<<< HEAD
	private function __construct(){} //nema instanciranja
	private function __clone(){} // nema kloniranja
	
	public static function get($file = null)
	{
		if($file){
			$items = require_once 'config/'.$file.'.php'; //npr. config/app.php i array iz app-a dobivamo u $items
			return $items;
		}
			return false; //da ne izbacuje error ako ne pošaljemo argument
=======
	private function __construct(){}
	private function __clone(){}
	
	public static function get($file = null)
	{		
		if($file) {
			$filename = 'config/'.$file.'.php';
			if(is_file($filename)) {
				return require_once $filename;
			}
		}
		
		return false;
>>>>>>> 92af822f2c419179c6abf6b2dfdb49870313fa6b
	}
}