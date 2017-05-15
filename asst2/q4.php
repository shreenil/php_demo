<html>
<head>
</head>
<body>
<form name="form1" method="post">
<center>
<h1>String contains?</h1>
<label>Enter String</label>
<input type="text" name="txt1"><br>
<label>Sub string</label>
<input type="text" name="txt2"><br>
<?php
$ans=" ";
if(isset($_POST['submit']))
	{
	
	$str=$_REQUEST['txt1'];
	$str1=$_REQUEST['txt2'];
	$po=strpos($str,$str1)+1;
	if(strpos($str,$str1)==true)
	{
		echo "String present at".$po."position";
	}
	else
	{
		echo "String does not present";
	}
	}
?>



<input type="submit" name="submit" value="String contains?">
</center>
</form>
</body>

</html>
</html>