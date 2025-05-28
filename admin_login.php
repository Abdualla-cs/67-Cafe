<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: admin_dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Login - 67 Cafe</title>
    <style>
        :root {
            --white-color: #ffffff;
            --dark-color: #1a1a1a;
            --primary-color: #000000;
            --secondary-color: #FFD700;
            --light-pink-color: #2a2a2a;
            --medium-gray-color: #444;
        }

        body {
            background-color: var(--primary-color);
            color: var(--white-color);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: var(--dark-color);
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px var(--medium-gray-color);
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: var(--secondary-color);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: none;
            border-radius: 4px;
            background-color: var(--light-pink-color);
            color: var(--white-color);
            font-size: 16px;
        }

        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: var(--medium-gray-color);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--secondary-color);
            border: none;
            border-radius: 4px;
            color: var(--primary-color);
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: var(--white-color);
            color: var(--primary-color);
        }

        .error-message {
            background-color: #cc3333;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Admin Login</h2>
        <?php
        if (isset($_SESSION['login_error'])) {
            echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
            unset($_SESSION['login_error']);
        }
        ?>
        <form action="admin_login_action.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required />

            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>