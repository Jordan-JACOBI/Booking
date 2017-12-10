<?php

	if(!$myBooking->isRegistered())
	{
		$db->save($myBooking);
	}
	
	require 'view/v_send.php';
		
?>