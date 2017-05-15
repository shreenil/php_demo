<html>
<head>
<title>Programme 12</title>
<?php 
$unit=0;
$ans="";
if(isset($_POST['ans']))
{
	$no=$_POST['txt1'];

	if($no>=0 && $no<4)
	{
	$ans="very low";
	}
	elseif($no>=4 && $no<=6)
	{
	$ans="low";
	}
	elseif($no==7)
	{
	$ans="correct";
	}
	elseif($no>=8 && $no<=10)
	{
	$ans="High";
	}
	else
	{
		$ans="Very High";
	}
}
?>
</head>
<body>
<form name="form1" method="post" action="#">
<center>
<h1>GuessGame </h1>

<br>


<label>Enter Number</label>
<input type="number" name="txt1" />
<br>

<label>Final Amount<br><?php echo $ans;?></label>

</br>
<input type="submit" name="ans"/>
</center>

</form>

</body>
</html>