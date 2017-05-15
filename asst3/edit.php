
<html>
<body>
<?php
	$id=$_REQUEST['id'];
	$con=mysqli_connect("localhost","root","","technomantra");
	$res=mysqli_query($con,"select * from technomantra where p_id='$id'");
	while($row=mysqli_fetch_assoc($res))
	{
		$name=$row['Pname'];
	}
?>
<form name="form1" method="post">
	<label>Name:</label>
	<input type="text" name="name" value="<?php echo $name;?>">
</form>
</body>
</html>
