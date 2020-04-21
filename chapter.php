<?php include 'database.php';?>
<?php include 'navbar.php';?>
<?php
$c=$_GET["subject"];
echo $c;
    $query="SELECT DISTINCT chapter FROM chapters WHERE subject='$c'";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_all($result);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PTU</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="chapter.css">
      
  </head>
  <body>
      <div class="centerer">
  <h1>Choose Any Of The Chapters</h1>
  <h1>Learn Online From Videos</h1>
  <h4>By: <a href="index.php" target="_blank">WebnoLogy</a></h4>
  <div class="wrap">
      <?php
      $i=0;
      $t=count($row);
      while($i<$t/2){
             
    echo '<a href="video.php"><form action="video.php" method="get"><button class="btn-0" type="submit" name="chapter" value="'.$row[$i][0].'">'.$row[$i][0].'</button></form></a>';
      $i++;
      }
          ?>
  </div>
  <div class="wrap">
      <?php
      while($i<count($row)){  
    echo '<a href="video.php"><form action="video.php" method="get"><button class="btn-0" type="submit" name="chapter" value="'.$row[$i][0].'">'.$row[$i][0].'</button></form></a>';
      $i++;
      }
          ?>
  </div>
</div>
  </body>
</html>