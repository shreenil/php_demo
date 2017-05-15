<html>
<head>
<title>Programme 15</title>

</head>
<body>
<form name="form1" method="post" action="#">
<center>
<h3>Login Form </h3>
<br>

<label>Enter UserName</label>
<input type="text" name="txt1" />
<br>

<label>Enter Password</label>
<input type="password" name="txt2" />
<br>

<?php 
$ans=0;
if(isset($_POST['ans']))
{
$n1=$_POST['txt1'];
$n2=$_POST['txt2'];
	if($n1=='admin' && $n2=='admin')
	{
		echo "valid user";
	}
	else
	{
		echo "Invalid user";
	}
}
?>

</br>
<input type="submit" name="ans" value="Login"/>
</center>
</form>

</body>
</html>