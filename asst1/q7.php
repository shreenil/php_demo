<html>
<head>
<?php
	if(isset($_POST['submit']))
	{
			$total=0;
			$p=$_REQUEST['txt1'];
			$q=$_REQUEST['txt2'];
			$bill=$p*$q;
			if($q>100)
			{
				$dis=$bill*0.10;
				$bill=$bill-$dis;
				
				
			}
			
			
		
		
	}
?>
<body>
<form name="form1" method=post action="#">
<center>
<h1>Price & Qty</h1>
	<label>Enter Price</label>
	<input type="number" name="txt1">
	<label>Enter Qty</label>
	<input type="number" name="txt2">
	<br>
	<center>
	<label>Final Amount:</label>
	<input type="number" name="txt3" 
	value='<?php 
	echo $bill; ?>'>
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