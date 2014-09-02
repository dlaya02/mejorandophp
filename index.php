<?php 


	require 	'confi.php';
	require 	'helpers.php';


// llamadas a los controladores individuales

	
	//index.php
	if(empty($_GET['url']))
	{
		require "controllers/home.php";


	//index.php?url=contactos
	} elseif($_GET['url'] == 'contactos')
		{
			require "controllers/contactos.php";
		}

	//index.php?url=loqueseavainaslocashdlgeliou47859
	else
	{
			header("HTTP/1.0 404 Not Found");
			exit("Pagina no encontrada");
	}

