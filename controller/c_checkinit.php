<?php
	//*****************************UPDATE DATA*****************************//
	
	//----> Update DESTINATION
	if(isset($_POST['destination']) && $_POST['destination']!="")
	{
		$myBooking->setDestination($_POST['destination']);
	}
	else
	{
		$error['destination'] = 1;
	}
	
	//----> Update NUMBER OF PASSENGERS
	if(isset($_POST['numberOfPassengers']) && $_POST['numberOfPassengers']>0 && $_POST['numberOfPassengers'] < 30)
	{	
		$myBooking->setNumberOfPassengers($_POST['numberOfPassengers']);
	}
	else
	{
		$error['numberPeople'] = 1;
	}
	
	//----> Update INSURANCE
	if(isset($_POST['insurance']))
	{
		$myBooking->setInsurance(1);
	}
	else
	{
		$myBooking->setInsurance(0);
	}
	
	if(isset($error))
	{
		require 'view/v_init.php';
	}
	else
	{		
		require 'controller/c_passengers.php';
	}
?>