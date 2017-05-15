<html>
<head>
</head>
<body>
<form name="form1" method="post">
<center>
<h1>Upper Case</h1>
<label>Enter String</label>
<input type="text" name="txt1"><br>
<?php
$ans=" ";
if(isset($_POST['submit']))
	{
	
	$str=$_REQUEST['txt1'];
	$ans=strtoupper($str);
	}
?>

<label>Answer</label>
<input type="text" name="txt2" value='<?php  echo $ans; ?>'><br>
<input type="submit" name="submit" value="Uppercase">
</center>
</form>
</body>

</html>