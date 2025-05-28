<?php
session_start();
include 'connection.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Unauthorized access Admin only.";
        header("Location: admin_login.php");
        exit();
    }
} else {
    $_SESSION['login_error'] = "Please enter email and password.";
    header("Location: admin_login.php");
    exit();
}
?>