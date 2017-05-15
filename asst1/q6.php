<html>
<head>
<?php
	if(isset($_POST['submit']))
	{
		
			$x=$_REQUEST['txt1'];
			$mul=1;
			$sum=0;
			$num=0;
			while($x>0)
			{
				$num=$x%10;
				if($num%2==0)
				{
					$sum=$sum+$num;
				}
				else
				{
					$mul=$mul*$num;
				}				
				$x=$x/10;
			}
			echo "Addition of even numbers-->".$sum;
			echo "<br>";
			echo "Production of odd numbers-->".$mul;
		
	}
?>
<body>
<form name="form1" method=post action="#">
<center>
	<h1>Addition of Even digits and Production of odd numbers</h1>
	<label>Enter number</label>
	<input type="number" name="txt1">
	
	
	<p>
	<input type="submit" name="submit" value="Find!!!">
	</p>
	
</center>
</form>
</body>
</head>
</html>