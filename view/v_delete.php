<html>
	<head>
		<title>Booking | Delete</title>
		<link rel = "stylesheet" type = "text/css" href ="view/form.css" >
	</head>
	
	<body>
		<div id=wrapper>
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
		</div>	
	</body>
</html>