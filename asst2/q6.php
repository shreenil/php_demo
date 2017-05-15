<html>
<head>
</head>
<body>
<form name="form1" method="post">
<center>
<h1>Marks of the student</h1>
<?php
$ans="";
	if(isset($_POST['submit']))
	{
		$arr=array("Shreeja"=>"50","Shreenil"=>"51","Shlok"=>"52");
		$txt=$_POST['txt1'];
		foreach($arr as $x=>$x_value)
		{
			if($txt==$x)
			{
				
				$ans="Marks of   ".$x."is   ".$x_value;
			}
		}
	}
?>
<label>Enter name:</label>
<input type="text" name="txt1"><br>
<br>
<label>Answer:</label>
<input type="text" value="<?php echo $ans;?>"><br>
<br>
<input type="submit" name="submit" value="Display Marks!!"><br>
<br>

</center>
</form>
</body>

</html>