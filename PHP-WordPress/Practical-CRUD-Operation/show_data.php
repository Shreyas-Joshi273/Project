<?php

require_once "connection.php";
$result = mysqli_query($conn, "SELECT * FROM `users`");

?>

<html>
    <head>
        <title>Users Show Data</title>
        <link rel="stylesheet" href="CSS/style.css" type="text/css" />
        <script language="javascript" src="JavaScript/users.js" type="text/javascript">
        </script>
    </head>
    <body>
        <div class="show">
            <h1>Show Data</h1>
            <form action="" name="frmUser" method="POST">
                <table border="1" cellpadding="5" cellspacing="1" class="tblListForm">
                    <tr class="listheader">
                        <td></td>
                        <td>Firstname</td>
                        <td>Lastname</td>
                        <td>Email</td>
                        <td>Number</td>
                    </tr>
                    <?php
                    $i = 1;
while ($row = mysqli_fetch_array($result)) {
    if ($i %2 == 0) {
        $classname = "evenRow";
    } else {
        $classname = "oddRow";
    }
    ?>
                    <tr class="<?php if (isset($classname)) {
                        echo $classname;
                    } ?>">
                        <td><input type="checkbox" name="users[]" value="<?php echo $row["userId"]; ?>"></td>
                        <td><?php echo $row["firstName"]; ?></td>
                        <td><?php echo $row["lastName"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["number"]; ?></td>
                </tr>
                <?php
                $i++;
}
                ?>
                <tr class="listheader">
                    <td colspan="5"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete" onClick="setDeleteAction();" /></td>
                </tr>
                </table>
            </form>
        </div>
    </body>
</html>