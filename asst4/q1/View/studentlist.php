<html>  
<head></head>  
  
<body>  
  <center>
  <h1>List Of Students</h1>
    <table border=1>   
		
		<tbody>
		<tr>
			<td>Name</td>
        <?php   
  
            foreach($students as $row)  
            {  
				echo '<tr>
				<td><a href="index.php?id='.$row['roll_no'].'">'.$row['name'].'</a></td>';
				
            }  
  
        ?>  
		</tr>
		</tbody>
    </table>  
  </center>
</body>  
</html>  