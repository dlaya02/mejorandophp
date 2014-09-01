<?php 

	$language = "php";
	$confidencial = "esto es una contraseña super secreta";



	function view($language)
	{
		require "view.php";
	}

	view($language);

 ?>