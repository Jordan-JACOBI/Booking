<?php
	require 'controller/c_preaction.php';
	
	//authorized pages // Can be moved to a model
	$authorized = array();
	array_push($authorized, "bookingslist");
	array_push($authorized, "init");
	
	if(isset($_GET['page'])&& in_array($_GET['page'], $authorized))
	{
		$page = 'controller/c_'.$_GET['page'].'.php';
		
		if(is_file($page))
		{
			$pageLoaded = 1;
			require $page;
		}
	}
	
	if(!isset($pageLoaded))
	{
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
	}
	
	if(!isset($pageLoaded))
	{
		require 'controller/c_bookingslist.php';
	}
	
	require 'controller/c_postaction.php';
?>