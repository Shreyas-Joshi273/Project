<?php

require_once "connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="")
{
    $userCount = count($_POST["firstName"]);
    for($i = 0; $i < $usersCount; $i++)
    {
        mysqli_query($conn, "UPDATE `users` SET firstName='" . $_POST["firstName"][$i] . "', lastName='" . $_POST["lastName"][$i] . "', email='" . $_POST["email"][$i] . "', number='" . $_POST["number"][$i] . "'");
    }
    header("Location:show_data.php");
}
?>
<html>
    <head>
        <title>Edit Users</title>
        <link rel="stylesheet" href="CSS/style.css" type="text/css" />
    </head>
    <body>
        <form action="" name="frmUser" method="POST">
            <div style="margin-top: 15px;">
            <table border="1" cellpadding="10" cellspacing="0" align="center">
                <tr class="tableheader">
                    <td>Edit User</td>
                </tr>
                <?php
                $rowCount = count($_POST["users"]);
for ($i = 0; $i < $rowCount; $i++) {
    $result = mysqli_query($conn, "SELECT * FROM `users` WHERE userId='" . $_POST["users"][$i] . "'");
    $row[$i] = mysqli_fetch_array($result);

    ?>
                <tr>
                    <td>
                        <table border="0" cellpadding="10" cellspacing="0" align="center" class="tblSaveForm">
                            <tr>
                                <td><label>Firstname</label></td>
                                <td><input type="text" name="firstName[]" class="txtField" value="<?php echo $row[$i]['firstName']; ?>"></td>
                            </tr>

                            <tr>
                                <td><label>Lastname</label></td>
                                <td><input type="text" name="lastName[]" class="txtField" value="<?php echo $row[$i]['lastName']; ?>"></td>
                            </tr>

                            <tr>
                                <td><label>Email</label></td>
                                <td><input type="text" name="email[]" class="txtField" value="<?php echo $row[$i]['email']; ?>"></td>
                            </tr>

                            <tr>
                                <td><label>Number</label></td>
                                <td><input type="text" name="number[]" class="txtField" value="<?php echo $row[$i]['number']; ?>"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?php

}
                
                ?>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit" class="brnSubmit"></td>
                </tr>
            </table>
        </div>
        </form>
    </body>
</html>