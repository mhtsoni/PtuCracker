
<?php include 'database.php'?>
<?php
if($_POST){
$query="SELECT title FROM videos";
$ans=mysqli_query($link,$query);
$row=mysqli_fetch_array($ans);
    $query="DELETE FROM videos WHERE title='$_POST[title]'";


}?>