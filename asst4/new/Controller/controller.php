<?php
	include_once('Model/model.php');

class controller{

	public $model;
	public function __construct()
	{
		$this->model=new model();
	}
	public function invoke()
	{
		if(isset($_POST['submit'])){
			if($_POST['sel']=="before"){
				$this->model->before();
				//echo "before";
			}
			else
			{
				$this->model->after();
				//echo "after";
			}
		}
		include('View/view.php');

	}
	
}
?>