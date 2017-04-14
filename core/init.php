<?php

session_start();

<<<<<<< HEAD
spl_autoload_register(function($class){ //ovaj register će automatizmom pokrenuti funkciju i parametar class će dobiti ime klase, $class je ime klase, najbolje je imati isto ime datoteke i klase
	require_once 'classes/'.$class.'.php'; // npr. classes/db.php
}); 
=======
spl_autoload_register(function ($class){
	require_once 'classes/'.$class.'.php';
});
>>>>>>> 92af822f2c419179c6abf6b2dfdb49870313fa6b

require_once 'functions/sanitize.php';
