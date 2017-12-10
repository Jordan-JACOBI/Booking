<?php
	if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
		if(!$db->erase($_GET['id']))
		{
			$error['notdeleted'] = 1;
		}
	}
	else
	{
		$error['wrongid'] = 1;
	}

	require 'view/v_delete.php';
?>