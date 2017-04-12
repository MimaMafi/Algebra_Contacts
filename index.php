<?php

require_once 'core/init.php'; // automatski će biti startana sesija i sve klase jer se ovo nalazi u indexu koji je u rootu

var_dump (Config::get('app'));

$filename = '/path/to/file.php';

if (file_exists($filename)) {
    return '/path/to/file.php'; // vraća taj file
} else {
    return 'core/init.php'; // vraća na sesiju
}