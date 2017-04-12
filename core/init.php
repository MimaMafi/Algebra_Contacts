<?php

session_start();

spl_autoload_register(function($class){ //ovaj register će automatizmom pokrenuti funkciju i parametar class će dobiti ime klase, $class je ime klase, najbolje je imati isto ime datoteke i klase
	require_once 'classes/'.$class.'.php'; // npr. classes/db.php
}); 

require_once 'functions/sanitize.php';
