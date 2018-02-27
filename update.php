<?php
var_dump($_POST);

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE User SET (pseudo,email,pwd);
  
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    echo $stmt->rowCount() . ";
    }
catch(PDOException $e)
    {
        echo "";
    }

$conn = null;
?>
