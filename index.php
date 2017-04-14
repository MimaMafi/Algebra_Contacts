<?php
<<<<<<< HEAD

require_once 'core/init.php'; // automatski će biti startana sesija i sve klase jer se ovo nalazi u indexu koji je u rootu

var_dump (Config::get('app'));

$filename = '/path/to/file.php';

if (file_exists($filename)) {
    return '/path/to/file.php'; // vraća taj file
} else {
    return 'core/init.php'; // vraća na sesiju
}
=======
	require_once 'core/init.php';
	
	Helper::getHeader('Algebra Contacts', 'header');	
?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="jumbotron">
				<div class="container">
					<h1>Algebra Contacts</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis suscipit nisi. Morbi lobortis iaculis tortor id vulputate. Donec vitae hendrerit risus. Ut ac felis ut nulla feugiat mattis.</p>
					<a class="btn btn-primary btn-lg" href="login.php" role="button">Sign In</a>
					or
					<a class="btn btn-primary btn-lg" href="register.php" role="button">Create an account</a>
				</div>
			</div>
		</div>
	</div>
    
	
<?php
	Helper::getFooter();
?>
>>>>>>> 92af822f2c419179c6abf6b2dfdb49870313fa6b
