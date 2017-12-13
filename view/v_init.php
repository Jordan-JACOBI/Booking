<html>
	<head>
		<title>Booking</title>
		<link rel = "stylesheet" type = "text/css" href ="view/form.css" >
	</head>
	
	<body>
		<h1>Booking</h1>
		
		<p>
			The adult fare is $15. The fare under 12 years old is $10.<br/>
			The cancellation insurance costs $20 whatever the number of passengers.
		</p>
		
		<?php require 'view/v_error.php'; ?>
		
		<form method="post" action="index.php">
			<p>
				<?php
					//Could be moved into m_destination and loaded at the beginning in a controller
					$options = array();
					array_push($options, "");
					array_push($options, "Amsterdam");
					array_push($options, "Berlin");
					array_push($options, "Bruxelles");
					array_push($options, "Lisbonne");
					array_push($options, "London");
					array_push($options, "Madrid");
					array_push($options, "Paris");
					
					echo new DropDownList("destination","Destination : ", $options, $myBooking->getDestination());
					echo new Input("numberOfPassengers","Number of passengers : ", "number", $myBooking->getNumberOfPassengers());
					echo new Checkbox("insurance", "Cancellation insurance : ", $myBooking->getInsurance());
					
					echo new Button("checkinit", "Next", "submit");
					echo new Button("cancel", "Cancel", "submit");
				
				?>
			</p>
			
		</form>
		
	</body>
	
</html>