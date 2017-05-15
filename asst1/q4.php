<html>
<head>
<?php
	if(isset($_POST['submit']))
	{
			$ans=1;
			$no1=$_REQUEST['txt1'];
			$no2=$_REQUEST['txt2'];
			for($i=0;$i<$no2;$i++)
			{
				$ans=$ans*$no1;
			}
			
		
		
	}
?>
<body>
<form name="form1" method=post action="#">
<center>
<h1>Power</h1>
	<label>Enter number</label>
	<input type="number" name="txt1">
	<label>Enter power</label>
	<input type="number" name="txt2">
	<br>
	<center>
	<input type="number" name="txt3" 
	value='<?php 
	echo $ans; ?>'>
	</br>
	
	</center>
	<p>
	<input type="submit" name="submit" value="Power">
	</p>
	
</center>
</form>
</body>
</head>
</html>