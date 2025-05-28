<?php
session_start();
include 'connection.php';

$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$phone = $_POST['txtPhone'];
$address = $_POST['txtAddress'];
$item = $_POST['txtItem'];
$quantity = isset($_POST['txtQuantity']) ? $_POST['txtQuantity'] : 1;
$special = isset($_POST['txtSpecial']) ? $_POST['txtSpecial'] : '';

$sql = "INSERT INTO orders (name, email, phone, address, item, quantity, special_requests)
        VALUES ('$name', '$email', '$phone', '$address', '$item', $quantity, '$special')";

mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));

header("Location: index.php");
?>