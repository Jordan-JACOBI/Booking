<html>
	<head>
		<title>Booking | Registered</title>
		<link rel = "stylesheet" type = "text/css" href ="view/form.css" >
	</head>
	
	<body>
		<div id=wrapper>
			<h1>Registered</h1>
			
			<?php
				if(!isset($error))
				{
			?>
				<p>
					Your application has been successfully registered.<br />
					The total cost of your flight is $<?php echo $myBooking->getPrice();?>.
				</p>
			<?php
				}
				else
				{
					require 'view/v_error.php';
				}
			?>
			
		
			<p>
				<a href=index.php>Back to list</a>
			</p>
		</div>
	</body>
</html>