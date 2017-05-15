<html>
<head>

<body>
<form name="form1" method=post action="#">
<center>
<h1>Switch case</h1>
	<label>R-Rectangle</label<br>
	<label>S-square</label<br>
	<label>C-Circle</label<br>
	<label>T-Triangle</label<br>
	<center>
	<label>Enter your choice:</label>
	<input type="text" name="choice" >
	</br>
	<label>Enter number:</label>
	<input type="number" name="txt1">
	<br>
	<?php
	 //$ans=0;
	 $ch="";
	 if(isset($_POST['submit']))
	{
		if($ch=="R")
		{
			$ans=11;
		}
	}
	 if(isset($_POST['fill']))
	{
	$ch=$_POST['choice'];
	 if ($_POST['choice']=='R')
	 {
		echo "<input type=text name='txth'>";
		echo "<input type=text name='txtb'>";

	 }
	}
	?>
	</center>
	<p>
	<input type="submit" name="submit" value="Bill">
	<input type="submit" name="fill" value="values">
	</p>
	<center>
	<label>Answer:</label>
	<input type="number" name="text1" value='<?php echo $ans; ?>'> 
	</br>
	
</center>
</form>
</body>

</html>