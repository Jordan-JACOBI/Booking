<?php
	session_start();
	
	//Autoload classes when they're used
	require 'model/class_autoload.php';
	
	//Initiate DB connection : host/user/password/dbname
	$db = new mysqli("localhost","root","","bookingdb");
	
	//Get the Booking data stored or create a new object
	if(isset($_SESSION['booking']))
	{
		$myBooking = unserialize($_SESSION['booking']);
	}
	else
	{
		$myBooking = new Booking();
	}
?>