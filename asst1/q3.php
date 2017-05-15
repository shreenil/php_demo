<html>
<head>
<?php
	if(isset($_POST['submit']))
	{
		
			$x=$_REQUEST['txt1'];
			$no=$x;
			$mul=1;
			$sum=0;
			$num=0;
			while($x>0)
			{
				$num=$x%10;
				$sum=$sum+$num;
				if($num>1)
				{
					$mul=$mul*$num;
				}				
				$x=$x/10;
			}
			if($mul==$sum)
			{
				echo "Number is perfect";
				
			}
			else
			{
				echo "Number is not perfect";
			}
		
		
	}
?>
<body>
<form name="form1" method=post action="#">
<center>
<h1>Perfect Number or not?</h1>
	<label>Enter number</label>
	<input type="number" name="txt1">
	
	
	<p>
	<input type="submit" name="submit" value="Perfect Number?">
	</p>
	
</center>
</form>
</body>
</head>
</html>