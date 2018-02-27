<?php

var_dump($_POST);
$name=$_POST["nam"]
$pseudo=$_POST["pseudo"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_app";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $conn->prepare( "INSERT INTO user_app(name_user,user_pseudo,user_email,user_password) VALUES (:nam,:pseudo, :email, :pass)");
  $sql->bindParam(':name', $name);
  $sql->bindParam(':pseudo', $pseudo);
  $sql->bindParam(':email', $email);
  $sql->bindParam(':pass', $pass);
  $sql->execute();
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 