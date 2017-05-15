<html>
<head>
</head>
<body>
<form name="form1" method="post">
<center>
<h1>Capital of country</h1>
<?php

	
		$arr=array("Netherlands"=>"Amsterdam","Greece"=>"Athens","Germany"=>"Berlin");
		asort($arr);
		foreach($arr as $x=>$x_value)
		{
				echo "\n";
				echo "Capital of   ".$x."  is   ".$x_value;		
		}
	
?>

</center>
</form>
</body>

</html>