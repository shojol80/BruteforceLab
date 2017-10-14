

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>
    <h1>Welcome to My Website</h1>
    
    <a href="index.php">Home</a> |
    <a href="index.php?page=page1.php">Page 1</a> |
    <a href="index.php?page=page2.php">Page 2</a> |
    <a href="index.php?page=page3.php">Page 3</a>
    
    <hr/>
    
    <?php 
    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p>This is the front page.</p>";
    }
    
    ?>
    
  </body>
</html>


