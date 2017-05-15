<html>
<body>
<center>
<h1><u>All records</u></h1>
<table border=1>
	<tr>
		<th><label>Name:</label></th>
		
		<th><label>Photo:</label></th>
		
		<th><label>College Name:</label></th>
		
		<th><label>Year</label></th>
		
		<th><label>contact:</label></th>
		
		<th><label>Event:</label></th>
		
		<th><label>email:</label></th>
		
		<th><label>UserName:</label></th>
		
		<th><label>Password:</label></th>
		
		<th><label>Action:</label></th>
		
		<th><label>Action:</label></th>
		
	</tr>
		<?php
		$con=mysqli_connect("localhost","root","","technomantra");
		$res=mysqli_query($con,"select * from technomantra");
		while($row=mysqli_fetch_assoc($res))
		{
			?>
			<tr>
				<td>
					<?php
						echo $row['Pname'];
					?>
				</td>
				
				<td>
					<?php
						echo "<img height=150 width=150 src=".$row['photo'].">";
					?>
				</td>
				
				<td>
					<?php
						echo $row['Coll_name'];
					?>
				</td>
				
				<td>
					<?php
						echo $row['continue_year'];
					?>
				</td>
				
				<td>
					<?php
						echo $row['contact'];
					?>
				</td>
				
				<td>
					<?php
						echo $row['participating_event'];
					?>
				</td>
				
				<td>
					<?php
						echo $row['email'];
					?>
				</td>
	
				
				
				
				<td>
					<?php
						echo $row['username'];
					?>
				</td>
				
				<td>
					<?php
						echo $row['Password'];
					?>
				</td>
				<td>
					<a href="edit.php?id=<?php echo $row['p_id'];?>">Edit</a>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $row['p_id'];?>">Delete</a>
				</td>
				</tr>
				<?php
				}
				?>
				</table>
				</center>
				

</body>
</html>