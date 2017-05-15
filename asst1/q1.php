<html>
<head>
<?php
	if(isset($_POST['submit']))
	{
		$target_dir="images/";
		$target_file= $target_dir . basename($_FILES['txt1']['name']);
		//echo $target_file;
		move_uploaded_file($_FILES['txt1']['tmp_name'], $target_file);
		$con=mysql_connect("localhost","root","");
		mysql_select_db("test",$con);
		?>
		<script type="text/javascript">
			alert(<?php echo $target_file ?>);
		</script>
		<?php
		$res=mysql_query("insert into demo values('$target_file')",$con);
	}
?>
<body>
<form name="form1" method=post action="#" enctype="multipart/form-data">
<center>
	<label>Enter number</label>
	<input type="file" name="txt1"><br>
	<p>
	<input type="submit" name="submit" value="square">
	</p>
	
</center>
</form>
</body>
</head>
</html>