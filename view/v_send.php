<html>
	<head>
		<title>Booking | Registered</title>
		<link rel = "stylesheet" type = "text/css" href ="view/form.css" >
	</head>
	
	<body>
	
		<h1>Registered</h1>
		
		<p>
			Your application has been successfully registered.<br />
			The total cost of your flight is $<?php echo $myBooking->getPrice();?>.
		</p>
	
		<p>
			<a href=index.php>Back to list</a>
		</p>
		
	</body>
</html>