<?php

require_once "connection.php";
$rowCount = count($_POST["users"]);
for($i = 0; $i < $rowCount; $i++)
{
    mysqli_query($conn, "DELETE FROM `users` WHERE userId='" . $_POST["users"][$i] . "'");
}
header("Location:show_data.php");
?>

