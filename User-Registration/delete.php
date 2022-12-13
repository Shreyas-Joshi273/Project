<?php

 include 'config.php';

 $id = $_GET['del'];
 $query = "DELETE FROM `users` WHERE id = 20";

 if ($conn->query($query) === TRUE) {
   echo "Profile deleted successfully";
   echo "<meta http-equiv='refresh' content='0;url=register.php'>";
 } else {
   echo "Error deleting profile: " . $conn->error;
 }
?>





