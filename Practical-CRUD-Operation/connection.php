<?php

// Database connection

$conn = mysqli_connect('localhost', 'root', '', 'practical') or die("Connection failed : " . mysqli_connect_error());

if($conn)
{
   // echo "Connected successfully...";
}
else {
    echo "Please check your connection!!!";
}



?>