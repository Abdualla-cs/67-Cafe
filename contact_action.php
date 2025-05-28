<?php
session_start();
include 'connection.php';

$name = $_POST['Tname'];
$email = $_POST['Temail'];
$message = $_POST['Tmessage'];

$sql = "INSERT INTO contact (name, email, message) 
        VALUES ('$name', '$email', '$message')";

mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));

header("Location: index.php");
?>