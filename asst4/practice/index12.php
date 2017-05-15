<?php

	include_once('Controller/controller.php');
	$controller=new controller();
	
	if(isset($_POST["add"]))
	{
		$controller->adduser();
	}
	else
	{
		$controller->invoke();
	}
?>