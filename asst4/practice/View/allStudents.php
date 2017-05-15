<!DOCTYPE html>
<html>
	<body>
		<ul>
			<?php
			foreach($row as $r)
				echo "<li>".$r['email_id']." </li>";

				?>

		</ul>
		<form action="#" method="post">	
		<button type="submit" name="add">Add </button>	
		</form>
	</body>
</html>