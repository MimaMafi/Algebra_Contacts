<?php

return [
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
];