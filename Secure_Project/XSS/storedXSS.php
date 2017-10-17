<?php
 
include('../../Vulnerable_Project/header.php');
require_once('../../PDOdbCon.php');
?>


    <h1>Please Enter your comment with title</h1><br>
    <form class="navbar-form navbar-left" method="POST">
        <div class="form-group">
            <input type="text" name="title" class="col-xs-4" placeholder="Title"> <br><br>
            <textarea class="col-xs-6" rows="5" type="text" name="comment" placeholder="Comment"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    <br>
    <br>
    <br>

<?php

    echo"<table class='table'>";
    echo"<thead>";
    echo"<tr class='active'>";
    echo"<th>Ttile</th>";
    echo"<th>Comment</th>";

    $stmt = $conn->prepare("SELECT * FROM blog");
    $stmt->execute();
    $myrow = $stmt->fetchAll();
    foreach($myrow as $data=>$row){
        echo '<tr class="success">';
        echo '<td>'.htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8').'</td>';
        echo '<td>'.htmlspecialchars($row["comment"], ENT_QUOTES, 'UTF-8').'</td>';
        echo '</tr>';
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    }
    echo "</tbody>";
    echo "</table>";
?>

        <?php
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $stmt = $conn->prepare("INSERT INTO `blog`(`title`, `comment`) VALUES (:title,:comment)"); 
    $stmt->execute(array(':title'=>$_POST['title'],':comment'=>$_POST['comment']));
    header("Location: storedXSS.php");
}
?>