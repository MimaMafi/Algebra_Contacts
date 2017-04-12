<?php

return [
	'remember'   => [
		'cookie_name'  => 'hash',
		'cookie_expire'=> 604800 //sekunde u jednom tjednu, jer želimo da nam cookie vrijedi 7 dana
	],
	'sessions'   => [
		'session_name' => 'user',
		'token_name'   => 'token'
	]
];