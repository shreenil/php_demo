<html>
<head>
</head>
<body>
<form name="form1" method="post">
<center>
<h1>Palingdrome?</h1>
<?php
if(isset($_POST['submit']))
	{
	$str=$_REQUEST['txt1'];
	if($str==strrev($str))
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
<input type="submit" name="submit" value="Palingdrome?">
</center>
</form>
</body>

</html>