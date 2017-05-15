<?php
include_once('Model/model.php');

class controller
{
	public $model;
	public function __construct()
	{
		$this->model=new model();
	}

	public function invoke()
	{
		if(isset($_GET['id']))
		{
			$row=$this->model->getStudentById($_GET['id']);
			include "View/viewStudentById.php";
		}
		else
		{
			$row=$this->model->getAllStudent();
			include "View/allStudents.php";
			
		}
	}
	public function adduser()
	{
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$this->model->adduser($_POST['name']);
		}
		include "View/adduser.php";
		echo "aayu";
		
	}
}
?>