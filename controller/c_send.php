<?php
	$myBooking->save($db, 'bookings');
	
	require 'view/v_send.php';
		
?>