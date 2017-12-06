<?php

	if(!$myBooking->isRegistered())
	{
		$myBooking->save($db, 'bookings');
	}
	
	require 'view/v_send.php';
		
?>