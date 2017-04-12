<?php

class Config
{
	private function __construct(){} //nema instanciranja
	private function __clone(){} // nema kloniranja
	
	public static function get($file = null)
	{
		if($file){
			$items = require_once 'config/'.$file.'.php'; //npr. config/app.php i array iz app-a dobivamo u $items
			return $items;
		}
			return false; //da ne izbacuje error ako ne pošaljemo argument
	}
}