
<?php
include 'database.php';
$query="SELECT title FROM videos";
$ans=mysqli_query($link,$query);
$row=mysqli_fetch_array($ans);
echo '<head>

</head>
<body>
  <select>';
for($j=0;$j<10;$j++){
    $r=$row[0][$j];
    echo "<option>";echo "".$r."</option>";
  }
echo '</select>

</body>';?>



    
    