<html>
<head>
</head>
<body>
<form name="form1" method="post" action="#">
<center>
<h1>for loop table</h1>
<label>Iteration </label>
<input type="number" name="txt1">
<p>
<input type="submit" name="loop" value="loop">
</p>
</center>
</form>
</body>
<?php
	if(isset($_POST['loop']))
	{
		$no=$_REQUEST["txt1"];
		echo "<center>";
		echo "<table border=1>";
		for($i=1;$i<=$no;$i++)
		{
			echo "<tr>";
			echo "<td>";
			echo "<h3> Iteration ->".$i."</h6>";
			echo "</td>";
			echo "</tr>";
		}
		echo "</center>";
		echo "</table>";
	}
?>
</html>