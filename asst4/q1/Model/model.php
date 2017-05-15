<?php
	include_once("Model/student.php");
	
	class model
	{
		public function getAllRecords()
		{
			$con=mysqli_connect("localhost","root","","student");
			$res=mysqli_query($con,"select * from student");
			while($row=mysqli_fetch_assoc($res))
			{
				//echo $row['name'];
				$r[]=$row;
			}
			return $r;
		}
		
		public function getStudentById($id)
		{
		$con=mysqli_connect("localhost","root","","student");
			$res=mysqli_query($con,"select * from student where roll_no='$id'");
			$row=mysqli_fetch_assoc($res);
			return $row;
		}
	}
?>