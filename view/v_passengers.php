<html>
	<head>
		<title>Booking | Details</title>
		<link rel = "stylesheet" type = "text/css" href ="view/form.css" >
	</head>
	
	<body>
	
		<h1>Details</h1>
		
		<p>
			Please enter the name and age of the passengers.
		</p>
		
		<?php require 'view/v_error.php'; ?>
		
		<form method="post" action="index.php">	
		
			<p>
				<?php
						$i = $myBooking->getRegisteredPassengers();
						
						$name = $myBooking->getPassenger($i)->getName();
						$age = $myBooking->getPassenger($i)->getAge();
						
						echo '<p>Passenger '.($i+1).':</p>';
						
						echo new Input("name", "Name :", "text", $name);
						echo new Input("age", "Age :", "number", $age);
						echo '<br />';

						echo new Button("init", "Previous", "submit");
						echo new Button("confirm", "Next", "submit");
						echo new Button("cancel", "Cancel", "submit");
				?>	
			</p>
			
		</form>	
		
	</body>
</html>