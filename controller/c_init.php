<?php

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	
		//SET BOOKING DATA
		$bookingData = $db->findBooking($id)->fetch_assoc();
		$dest = $bookingData['destination'];
		$insurance = $bookingData['insurance'];
		
		$myBooking->setID($id);
		$myBooking->setDestination($dest);
		$myBooking->setInsurance($insurance);
		
		//SET PASSENGERS DATA
		$result = $db->getPassengers($id);
		while($pass = $result->fetch_assoc())
		{
			$name = $pass['name'];
			$age = $pass['age'];
			
			$myBooking->addPerson(new Person($name, $age));
		}
	}

	require 'view/v_init.php';
	
?>