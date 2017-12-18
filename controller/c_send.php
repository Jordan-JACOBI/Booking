<?php

	if(!$myBooking->isRegistered()&&$myBooking->isValid())
	{
		$id = $myBooking->getID();
		if($id != 0)
		{	
			$db->update($myBooking);
		}
		else
		{
			$db->save($myBooking);
		}
	}
	else
	{
		$error['notsaved'] = 1;
	}
	
	require 'view/v_send.php';
	
	if(!isset($error))
	{
		$myBooking->reset();
		$_SESSION['booking'] = serialize($myBooking);
	}
?>