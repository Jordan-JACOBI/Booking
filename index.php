<?php
	require 'controller/c_preaction.php';
	
	foreach ($_POST as $page=>$value)
	{
		//Format the page name
		$page = 'controller/c_'.$page.'.php';
		
		if(is_file($page))
		{
			$pageLoaded = 1;
			require $page;
		}
	}
	
	if(!isset($pageLoaded))
	{
		require 'controller/c_init.php';
	}
	
	require 'controller/c_postaction.php';
?>