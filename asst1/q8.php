<html>
<head>
<?php
	if(isset($_POST['submit']))
	{
			$charge=0;
			$unit=$_REQUEST['txt1'];
			if($unit>=0 || $unit<=50)
			{
				$charge=$unit*0.50;
			}
			elseif($unit>50 || $unit<=100)
			{
				$charge=$unit*0.75;
			}
			elseif($unit>100 || $unit<=200)
			{
				$charge=$unit*1;
			}
			else
			{
				$charge=$unit*1.5;
			}
			
			$fuel=$unit*0.40;
			$govttax=$unit*0.10;
			$meterrant=25;
			$unit=$charge+$fuel+$govttax+$meterrant;
	}
?>
<body>
<form name="form1" method=post action="#">
<center>
<h1>Electicity bill</h1>
	<label>Units</label>
	<input type="number" name="txt1">
	
	<br>
	<center>
	<label>Final Amount:</label>
	<input type="number" name="txt3" 
	value='<?php 
	echo $unit; ?>'>
	</br>
	
	</center>
	<p>
	<input type="submit" name="submit" value="Bill">
	</p>
	
</center>
</form>
</body>
</head>
</html>