<html>
<head>
</head>
<body>
<form name="form1" method="post">
<center>
<h1>Capital of country</h1>
<?php

	
		$arr=array(1,2,3,4,5);
		echo "original array is";
		foreach($arr as $x)
		{
			echo $x." ";
		}
		$ins="$";
		array_splice($arr,3,0,$ins);
		echo "After inserting $ array is";
		foreach($arr as $x)
		{
			echo $x." ";
		}
		
	
?>

</center>
</form>
</body>

</html>