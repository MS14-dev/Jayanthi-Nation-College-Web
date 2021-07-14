<?php

$connection = mysqli_connect("localhost", "root", "", "jayanthi_college");

if(!$connection){
    die(mysqli_connect_error() . "database connection failed");
}else{
    //echo "successfully connected" ;
}
?>