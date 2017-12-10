<?php

	$data = $db->getBookings();
	
	require 'view/v_bookingslist.php';
	
?>