<?php

require_once "connection.php";
$result = mysqli_query($conn, "SELECT * FROM `users`");

?>

<?php
if(isset($_POST['submit'])){

    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $number=$_POST['number'];

    $sql = "INSERT INTO `users`( `firstName`, `lastName`, `email`, `number`) VALUES ('$firstName', '$lastName', '$email', '$number')";
    $conn = mysqli_query($conn, $sql);
    if($conn)
    {
        echo "<script>alert('Data Inserted..');</script>";
    } else{
        echo "Error!!!";
    }
}
?>

<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="CSS/style.css" type="text/css" />
        <script language="javascript" src="JavaScript/users.js" type="text/javbascript"></script>
    </head>
    <body>
        <div class="insert">
            <h1>Insert Data</h1>
            <form action="#" method="POST">
                <table border="1" cellpadding="5" cellspacing="1" class="tblListForm">
                    <tr>
                        <td>Enter Firstname</td>
                        <td><input type="text" name="firstName"></td>
                    </tr>
                    <tr>
                        <td>Enter Lastname</td>
                        <td><input type="text" name="lastName"></td>
                    </tr>
                    <tr>
                        <td>Enter Email</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Enter Number</td>
                        <td><input type="number" name="number"></td>
                    </tr>
                    <tr style="background: blue; text-align: center;">
                    <td colspan="2"><input type="submit" name="submit"></td>    
                    </tr>
                </table>
            </form>

            <button><a href="show_data.php">Show Data</a></button>

        </div>
    </body>
</html>