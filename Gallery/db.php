<?php 
 
    $database = mysqli_connect('localhost','root','','school_web');

    if (mysqli_connect_errno()) {
        die("Connection failed." . mysqli_connect_error());
    }

?>