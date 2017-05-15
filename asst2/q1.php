<html>
<head>
</head>
<body>
<form name="form1" method="post">
<center>
<h1>Lower case?</h1>
<?php
if(isset($_POST['submit']))
	{
	$str=$_REQUEST['txt1'];
	if($str==strtolower($str))
	{
		echo "yes";
	}
	else
	{
		echo "no";
	}
	}
?>
<input type="text" name="txt1"><br>
<input type="submit" name="submit" value="Lower case?">
</center>
</form>
</body>

</html>