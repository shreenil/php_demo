<?php
	include_once("Model/model.php");  

class controller
{
	public $model;   
  
     public function __construct()    
     {    
          $this->model = new model();  
     }

		public function invoke()  
		{
			if(!isset($_GET['id'])) 
			{
				$students = $this->model->getAllRecords();  
               include 'View/studentlist.php'; 
			 }
			 else
			 {
				$row=$this->model->getStudentById($_REQUEST['id']);
				include 'View/viewstudent.php';
			 }
		}
}

?>