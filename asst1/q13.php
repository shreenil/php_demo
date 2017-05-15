<html>
<head>

<body>
<form name="form1" method=post action="#">
<center>
<h1><u>Sales calculation </u></h1>
	<label> ITEM PRICE </label>
	<input type="number" name="txt1">
	</br>
	<p>
	<input type="submit" name="submit" value="calculate">
	</p>
	</br>
	</center>
</form>
</body>
<?php
	if(isset($_POST['submit']))
	{
		$price=$_REQUEST['txt1'];
		$dis=$price*0.25;
		$bill=$price-$dis;
		$tax=$bill*0.084;
		$tot=$bill+$tax;
		echo "<center>";
		echo "<table border=1>";
		
		echo "<tr>";
		echo "<td>";
		echo "Price";
		echo "</td>";
		echo "<td>";
		echo $price;
		echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>";
		echo "25% discount";
		echo "</td>";
		echo "<td>";
		echo $dis;
		echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>";
		echo "discounted price";
		echo "</td>";
		echo "<td>";
		echo $tax;
		echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>";
		echo "Total";
		echo "</td>";
		echo "<td>";
		echo $tot;
		echo "</td>";
		echo "</tr>";
		 
		 echo "</center>";
	}
?>
</html>