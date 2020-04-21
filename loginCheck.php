
    <?php
    include 'database.php';
    if($_POST){
    $query="INSERT INTO videos(links,chapter,title) VALUES('$_POST[link]','$_POST[chapter]','$_POST[title]')";
    mysqli_query($link,$query);
    echo "<h1>Video Inserted Successfully</h1>";
    }
    ?>
    <script>
        
        setTimeout(function () {
   window.location.href= 'index.php'; // the redirect goes here

},2000);
    </script>