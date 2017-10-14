<?php
 
include('../header.php');
require_once('../../dbCon.php');
?> 
<h1>Please search a movie name</h1><br>
<form class="navbar-form navbar-left" method="GET" action='index.php'>
  <div class="form-group">
    <input type="text" name="movie" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br>
<?php

if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['movie'])){
    ?>
    <table class="table">
    <thead>
      <tr class="active">
        <th>id</th>
        <th>title</th>
        <th>release_year</th>
        <th>genre</th>
        <th>main_character</th>
        <th>imdb</th>
        <th>tickets_stock</th>
    <?php
    $movie_name = $_GET['movie'];

    $sql = "SELECT `id`, `title`, `release_year`, `genre`, `main_character`, `imdb`, `tickets_stock` FROM `movies` WHERE `title` like '%$movie_name%'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr class="success">';
        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row["title"].'</td>';
        echo '<td>'.$row["release_year"].'</td>';
        echo '<td>'.$row["genre"].'</td>';
        echo '<td>'.$row["main_character"].'</td>';
        echo '<td>'.$row["imdb"].'</td>';
        echo '<td>'.$row["tickets_stock"].'</td>';
        echo '</tr>';
        }
    } 
    else if (!$result) {
      printf(" %s\n", $conn->error);
    }
    else echo "No result found";
$conn->close();
    ?>
      </tr>
    </thead>
    <tbody>
    

      
    </tbody>
  </table>
    
    <?php
}

?>
    
