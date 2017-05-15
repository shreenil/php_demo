<html>
<head>
</head>
<body>
<form name="form1" method="post" action="#">
<center>
<h1>for loop table</h1>
<label>Rows </label>
<input type="number" name="txt1"><br>

<label>Colums </label>
<input type="number" name="txt2"><br>
<p>
<input type="submit" name="loop" value="loop">
</p>
</center>
</form>
</body>
<?php
	if(isset($_POST['loop']))
	{
		$no1=$_REQUEST["txt1"];
		$no2=$_REQUEST["txt2"];
		echo "<center>";
		echo "<table border=1>";
		for($i=1;$i<=$no1;$i++)
		{
			
			echo "<tr>";
			for($j=1;$j<=$no2;$j++)
			{
			echo "<td>";
			echo "<h3> Row ->".$i.",  coulmn -> ".$j."</h6>";
			echo "</td>";
			}
			echo "</tr>";
		}
		echo "</center>";
		echo "</table>";
	}
?>
</html>