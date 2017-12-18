<?php
	if(isset($error))
	{
			echo '<div class="error"><p class="error">';
			
			if(isset($error['destination']))
			{
				echo 'Please enter a destination.<br/>';
			}
			
			if(isset($error['numberPeople']))
			{
				echo 'Please enter the number of passengers.<br/>';
			}
			
			if(isset($error['name']))
			{
				echo 'Please enter the name of all the passengers.<br/>';
			}
			
			if(isset($error['age']))
			{
				echo 'Please enter an age between 0 and 130.<br/>';
			}
			
			if(isset($error['wrongid']))
			{
				echo 'Please enter a valid ID.<br/>';
			}
			
			if(isset($error['notdeleted']))
			{
				echo 'Sorry, an error occured during the deletion.<br/>';
			}
			
			if(isset($error['saved']))
			{
				echo 'Sorry, an error occured during the registration. Please try again.<br/>';
			}
			
			if(isset($error['majorpassenger']))
			{
				echo 'At least one passenger should be major.<br/>';
			}
			
			if(isset($error['notsaved']))
			{
				echo 'Sorry, an error occured during the registration.<br/>';
			}
			
			echo '</p></div>';
	}		
?>