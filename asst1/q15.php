<html>
<head>
</head>
<body>
<form name="form1" method="post" action="#">
<center>
<h3>Random Number </h3>
<br>

<label>Enter Number1</label>
<input type="number" name="txt1" />
<br>

<label>Enter Number2</label>
<input type="number" name="txt2" />
<br>

<?php 
$ans=0;
if(isset($_POST['ans']))
{
$n1=$_POST['txt1'];
$n2=$_POST['txt2'];
$ans=rand($n1,$n2);
}
?>

<label>Random Number--><?php echo $ans;?></label>

</br>
<input type="submit" name="ans"/>
</center>
</form>

</body>
</html>