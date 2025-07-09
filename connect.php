<?php

$con=mysqli_connect("localhost", "root","","online voting system");
if(!$con){
    
   die(mysqli_error($con));
}

?>