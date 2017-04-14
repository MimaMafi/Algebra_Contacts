<?php

return [
<<<<<<< HEAD
	'fetch'  => PDO::FETCH_OBJ,
	
	'driver' => 'mysql',
	
	'mysql'  => [ //ovo sve su ključevi
		'host'    => '127.0.0.1', //ip adresa od localhosta
		'user'    => 'root',
		'pass'    => '',
		'db'      => 'algebra_contacts',
		'charset' => 'utf8'
	],
	
	'sqlite'  => [
		'db'      => ''
	],
	
	'pgsql'  => [
		'host'    => '',
		'user'    => '',
		'pass'    => '',
		'db'      => '',
		'charset' => 'utf8'
	]
=======

	'fetch'    => PDO::FETCH_OBJ,
	
	'driver'   => 'mysql',
	
	'mysql'    => [
		'host'      => '127.0.0.1',
		'user'      => 'root',
		'pass'      => '',
		'db'        => 'algebra_contacts',
		'charset'   => 'utf8'
	],
	
	'sqlite'    => [
		'db'        => ''
	],
	
	'pgsql'    => [
		'host'      => '',
		'user'      => '',
		'pass'      => '',
		'db'        => '',
		'charset'   => 'utf8'
	]

>>>>>>> 92af822f2c419179c6abf6b2dfdb49870313fa6b
];