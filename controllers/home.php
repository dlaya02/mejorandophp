<?php 


	require 	'confi.php';
	require 	'helpers.php';

	$language 		= "php";
	$confidencial 	= "esto es una contraseña super secreta";
	$titulo 		= 'Mejorando.la';
	
	view('home',compact('titulo','language'));
