<html>
<head>
<?php
	if(isset($_POST['submit']))
	{
		$i=0;
		$j=1;
		$no=$_REQUEST['txt1'];
		while($no>=$i)
		{
			echo $i." "." ".$j;
			$i=$i+$j;
			$j=$j+$i;
			echo "	";
		}
	}
?>
<body>
<form name="form1" method=post action="#">
<center>
<h1>Fibonacci Series</h1>
	<label>Enter number</label>
	<input type="number" name="txt1">
	
	
	<p>
	<input type="submit" name="submit" value="Fibonacci Series">
	</p>
	
</center>
</form>
</body>
</head>
</html>