<html>
	<head>
		<title>Booking | Confirmation</title>
		<link rel = "stylesheet" type = "text/css" href ="view/form.css" >
	</head>
	
	<body>
		<div id=wrapper>
			<h1>Confirmation</h1>
			
			<form method="post" action="index.php">
				<p>				
					<?php
						for($i = 0; $i<$myBooking->getNumberOfPassengers();$i++)
						{
							echo '<fieldset>';
							echo '<em>Passenger '.($i+1).' :'.'</em><br />';
							echo $myBooking->getPassenger($i)->getName().'<br />';
							echo $myBooking->getPassenger($i)->getAge().' years'.'<br />';
							echo '</fieldset>';
							echo '<br />';
						}
						
						echo new Button("passengers", "Previous", "submit");
						echo new Button("send", "Confirm", "submit");
						echo new Button("cancel", "Cancel", "submit");
					?>
				</p>
			</form>
		</div>
	</body>
</html>