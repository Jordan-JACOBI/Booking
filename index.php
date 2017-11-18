<?php

	session_start();
	
	//Autoload classes when they're used
	require 'model/class_autoload.php';
	
	if(isset($_SESSION['booking']))
	{
		$myBooking = unserialize($_SESSION['booking']);
	}
	else
	{
		$myBooking = new Booking();
	}
		
	
	foreach ($_POST as $page=>$value)
	{
		//Format the page name
		$page = 'controller/c_'.$page.'.php';
		
		if(is_file($page))
		{
			$pageLoaded = 1;
			require $page;
		}
	}
	
	if(!isset($pageLoaded))
	{
		require 'controller/c_init.php';
	}
	
	$_SESSION['booking'] = serialize($myBooking);
?>