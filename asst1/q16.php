<html>
<head>
<title>Programme 16</title>

</head>
<body>
<form name="form1" method="post" action="#">
<center>

<br>

<label> Number 1:</label>
<input type="number" name="txt1" />
<br></br></br>

<label>Number 2:</label>
<input type="number" name="txt2" />
<br>

</br>
</br>
<label>Operations</label>
<input type="checkbox" name="chk_add" value="add">Addition</input>
<input type="checkbox" name="chk_sub" value="sub">Subtraction</input>
<input type="checkbox" name="chk_mul" value="mul">Multiplication</input>
<input type="checkbox" name="chk_div" value="div">Division</input>

</br>
</br>

<?php 
//$ans=0;

if(isset($_POST['submit']))
{
$no1=$_POST['txt1'];
$no2=$_POST['txt2'];

if(isset($_POST['chk_add']))
{
	$ans=$no1+$no2;
echo $ans;
}
if(isset($_POST['chk_sub']))
{
	$ans=$no1-$no2;
echo $ans;
}
if(isset($_POST['chk_mul']))
{
	$ans=$no1*$no2;
echo $ans;
}
if(isset($_POST['chk_div']))
{
	$ans=$no1/$no2;
echo $ans;
}

}
?>

<label>Answer:</label>
	<input type="number" name="text1" value='<?php echo $ans; ?>'> 
	</br>
</br>
<input type="submit" name="submit" value="Calculate"/>
<center>
</form>

</body>
</html>