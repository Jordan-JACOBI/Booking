<?php
	
	//Update
		$i = $myBooking->getRegisteredPassengers();
		
		if(isset($_POST['name']) && $_POST['name']!="")
		{
			$myBooking->getPassenger($i)->setName($_POST['name']);
		}
		else
		{
			$error['name'] = 1;
		}
		
		if(isset($_POST['age']) && $_POST['age'] > 0 && $_POST['age'] <= 130)
		{
			$myBooking->getPassenger($i)->setAge($_POST['age']);
		}
		else
		{
			$error['age'] = 1;
		}
	
	if(!isset($error))
	{
		$myBooking->addRegisteredPassenger();
	}
	
	if($myBooking->allPassengersRegistered())
	{
		if($myBooking->isValid())
		{
			require 'view/v_confirm.php';
		}
		else
		{
			$myBooking->setRegisteredPassengers(0);
			$error['majorpassenger'] = 1;
			require 'view/v_passengers.php';
		}
	}
	else
	{
		require 'view/v_passengers.php';
	}
	
?>