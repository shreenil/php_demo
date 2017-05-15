<?php
	session_start();
?>
<html>
<head></head>
<body>
<?php
	
	if(isset($_POST['submit']))
	{
		//$photo=$_POST["image"];
		$errors=array();
		$file_name=$_FILES['image']['name'];
		$file_size=$_FILES['image']['size'];
		$file_tmp=$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$FILES['image']['name'])));
		$extensions=array("jpeg","jpg","png");
		if(empty($errors)==true)
		{
			move_uploaded_file($file_tmp,"images/".$file_name);
			$photo="images/".$file_name;
			
		}
		$name=$_POST["pname"];
		$coll_name=$_POST["coll_name"];
		$cnt=$_POST["c_year"];
		$email=$_POST["email"];
		$contact=$_POST["contact"];
		$pe=$_POST["p_event"];
		$uname=$_POST["uname"];
		$pass=$_POST["password"];
		$con=mysqli_connect("localhost","root","","technomantra");
		$res=mysqli_query($con,"insert into technomantra(Pname,photo,Coll_name,continue_year,email,contact,participating_event,username,password) 
						values('$name','$photo','$coll_name','$cnt','$email','$contact','$pe','$uname','$pass')");
		if($res==1)
		{
			header('location:allrecords.php');
		}
							
		
	
		 
	}
?>

<center>
<h1>REGISTRATION FORM</h1>
<form name="form1" method="post" enctype="multipart/form-data">
<table border="1">
	
	<tr>
		<td>Name:</td>
		<td><input type="text" name="pname"></td>
	</tr>
	
	<tr>
		<td>Photo:</td>
		<td><input type="file" name="image"></td>
	</tr>
	
	
	<tr>
		<td>Collage Name:</td>
		<td><input type="text" name="coll_name"></td>
	</tr>
	
	<tr>
		<td>Continue Year:</td>
		<td><input type="text" name="c_year"></td>
	</tr>
	
	<tr>
		<td>email</td>
		<td><input type="email" name="email"></td>
	</tr>
	
	<tr>
		<td>Contact:</td>
		<td><input type="text" name="contact"></td>
	</tr>
	
	<tr>
		<td>Participating Event:</td>
		<td><input type="text" name="p_event"></td>
	</tr>
	
	<tr>
		<td>Username</td>
		<td><input type="text" name="uname"></td>
	</tr>
	
	<tr>
		<td>Password</td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Register"></td>
	</tr>
</table>
</form>
</center>

</body>
</html>