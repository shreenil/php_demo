<html>  
<head></head>  
  
<body>  
  
    <table>  
        
        <?php   
  
            foreach ($books as $title => $book)  
            {  
                echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';  
            }  
  
        ?>  
    </table>  
  
</body>  
</html>  