<?php
	$cookie_name="shreeja";
	$cookie_value="shreenil";
	setcookie($cookie_name,$cookie_value,time()+(60),"/")
?>
<html>

	<?php
	if(isset($_COOKIE[$cookie_name])){
		echo "<body bgcolor='pink'>";
	}
	else
	{
		echo "<body bgcolor='red'>";
	}
	?>
</body>
<html>