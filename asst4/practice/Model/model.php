<?php
	class model
	{
		public function getStudentById($id)
		{
			$con=mysql_connect('localhost','root','');
			mysql_select_db('reunir',$con);
			$res=mysql_query("select * from user_tbl where email_id='$id'",$con);
			while($row=mysql_fetch_assoc($res))
			{
				$r[]=$row;
			}
			return $r;
		}

		public function getAllStudent()
		{

			$con=mysql_connect('localhost','root','');
			mysql_select_db('reunir',$con);
			$res=mysql_query("select * from user_tbl",$con);
			while($row=mysql_fetch_assoc($res))
			{
				$r[]=$row;
			}
			return $r;
		}
		public function adduser($name)
		{
			echo $name."hii";
			$con=mysql_connect('localhost','root','');
			mysql_select_db('reunir',$con);
			$res=mysql_query("insert into user_tbl values('$name','','','','','','','')",$con);
		}
	}
?>