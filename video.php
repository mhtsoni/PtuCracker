<?php include 'database.php';?>
<?php include 'navbar.php';?>
<?php
    $query="SELECT links,chapter,title FROM videos";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_all($result);
    $k=0;


function convertYoutube($string) {
	return preg_replace(
		"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
		"//www.youtube.com/embed/$2\" allowfullscreen",
		$string
	);
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="video.css">
    <title>PTU</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
<h3 class="centered">Watch This Sereis Of Videos Specially Selected By Teachers To Serve You Better For Your PTU Exams</h3>
<div class="link-grid">
   <?php
    while($k<count($row)){
    if($row[$k][1]==$_GET["chapter"]){
   
   echo '<div>
      <figure class="video">
        <div class="video__gradient"></div>
        <figcaption class="video__title"><h1>'.$row[$k][2].'</h1></figcaption> 
        <iframe allowfullscreen="allowfullscreen";
        mozallowfullscreen="mozallowfullscreen" ;
        msallowfullscreen="msallowfullscreen" ;
        oallowfullscreen="oallowfullscreen" ;
        webkitallowfullscreen="webkitallowfullscreen" class="video__thumbnail" width="420" height="315";
src="'.convertYoutube($row[$k][0]).'">
</iframe>
      </figure>
   </div>';
    }
        $k++;
        }
     ?>  
</div>
  </body>
</html>