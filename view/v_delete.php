<html>
	<head>
		<title>Booking | Delete</title>
		<link rel = "stylesheet" type = "text/css" href ="view/form.css" >
	</head>
	
	<body>
	
		<h1>Delete</h1>
		
		<p>
			<?php
				if(!isset($error))
				{
					echo 'Your application has been successfully deleted.<br />';
				}
				else
				{
					require 'view/v_error.php';
				}
			?>
		</p>
	
		<p>
			<a href=index.php>Back to list</a>
		</p>
		
	</body>
</html>