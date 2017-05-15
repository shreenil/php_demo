<html>
<head>
<title>Programme 16</title>

</head>
<body>
<fieldset>
<form name="form1" method="post" action="#">
<center>
<legend>Mortgage Loan Intrest</legend>
<br>

<label>Price Of Home</label>
<input type="number" name="txt1" />
<br>

<label>Down Payement</label>
<input type="number" name="txt2" />
<br>

<legend>Duration Of Home</legend>
<input type="radio" name="radio1" value="10 yrs" />10 Years<br>
<input type="radio" name="radio1" value="20 yrs" />20 Years<br>
<input type="radio" name="radio1" value="30 yrs" />30 Years

<br>

<label>Intrest Rate</label>
<select name="rate">
<option value="10" selected>10</option>
<option value="20" >20</option>
</select>
<br>

<?php 
$ans=0;
if(isset($_POST['ans']))
{
	$n1=$_POST['txt1'];
	$n2=$_POST['txt2'];
	$n3=$_POST['rate'];
	$n4=$_POST['radio1'];
	$si=$n1-$n2;
	$tot=$n1+$si;
	$duration=$_POST['radio1'];
	echo "<br> Price of home $".$n1;
	echo "<br> Down payement $".$n2;
	echo "<br> Duration ".$n4;
	echo "<br> Intrest rate ".$n3;
	echo "<br> Total Simple Intrest".$si;
	echo "<br> Total price of home".$tot;
	
	
}
if(isset($_POST['clear']))
{
	$_POST['txt1']="";
	$_POST['txt2']="";
	$_POST['txt3']="";
}
?>

</br>
<input type="submit" name="ans" value="Calculate"/>
<input type="button" name="clear" value="Clear"/>
</legend>
</center>
</form>
</fieldset>
</body>


</html>