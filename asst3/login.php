<html>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$con=mysqli_connect("localhost","root","","technomantra");
		$res=mysqli_query($con,"select * from technomantra where username='$name' and password='$pass'");
		if($res==1)
		{
			header('location:allrecords.php');
		}
		else
		{
			echo "Invalid username and password";
		}
	}
?>
<body>
	<form method="post" name="form1">
		<center><h1>LOGIN</h1></center>
		<table border="1">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="name">
			</tr>
			
			<tr>
				<td>Password:</td>
				<td><input type="text" name="pass">
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit">
			</tr>
		</table>
	</form>
</body>
</html>