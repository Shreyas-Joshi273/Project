<!DOCTYPE html>
<html>
<body>

<?php
    // Reference From W3 School
    echo "<table style='border: solid 2px black;'>";
    echo "<tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Username</th>
    <th>Email</th>
    <th>Image</th>
    <th>Password</th>
    <th>ConfirmPassword</th>
    </tr>";
   
    // Inheritance
    // An Iteratorvie Function Is One Loop That To Repeat Some Part Of Code. And A Recursive Function Is One That Calls Itself Again To Repeat The Code.
    class TableRows extends RecursiveIteratorIterator {
     function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
        $servername = "172.104.166.158";
        $username = "training_shreyasj";
        $password = "Trv2a4Koy9rgJAZa";
        $dbname = "training_shreyasj";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM users ORDER BY id  LIMIT 5");
            
            $stmt->execute();
        
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                echo $v;
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
    ?>
</body>
</html>