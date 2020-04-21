<?php
/*connecting to a database*/
$link=mysqli_connect("localhost","root","","ptucracker");
if(mysqli_connect_error()){
    echo "couldnot connect";
}

?>