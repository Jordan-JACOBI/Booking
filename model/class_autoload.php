<?php
	function loadClass($class)
	{
			require strtolower($class).'.php';
	}
	
	spl_autoload_register('loadClass');
?>