<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['email'])) {
    header("Location: admin_login.php");
    exit();
}

$addMsg = '';
if (isset($_POST['add_employee'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    if ($name && $email && $password && $gender) {
        $sql = "INSERT INTO employees (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
        if (mysqli_query($con, $sql)) {
            $addMsg = "Employee added successfully.";
        } else {
            $addMsg = "Error adding employee.";
        }
    } else {
        $addMsg = "Please fill all fields.";
    }
}

if (isset($_GET['delete_id'])) {
    $del_id = (int)$_GET['delete_id'];
    $sql = "DELETE FROM employees WHERE id = $del_id";
    mysqli_query($con, $sql);
    header("Location: admin_dashboard.php");
    exit();
}

$employees = mysqli_query($con, "SELECT * FROM employees ORDER BY name ASC");

$contacts = mysqli_query($con, "SELECT * FROM contact ORDER BY submission_date DESC LIMIT 5");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard - 67 Cafe</title>
    <link href="style.css" rel="stylesheet" />
    <style>
        :root {
            --white-color: #ffffff;
            --dark-color: #1a1a1a;
            --primary-color: #000000;
            --secondary-color: #FFD700;
            --light-pink-color: #2a2a2a;
            --medium-gray-color: #444444;
        }

        body {
            background-color: var(--primary-color);
            color: var(--white-color);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: var(--dark-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--secondary-color);
            letter-spacing: 2px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: var(--white-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: var(--secondary-color);
        }

        .welcome {
            font-size: 1.2rem;
        }

        main {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        section {
            margin-bottom: 3rem;
        }

        h1,
        h2 {
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background-color: var(--dark-color);
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 15px var(--secondary-color);
        }

        .card h3 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }

        .card p {
            margin: 0.5rem 0;
            line-height: 1.4;
            white-space: pre-wrap;
        }

        .card small {
            color: var(--medium-gray-color);
        }

        .btn-logout {
            background-color: transparent;
            border: 2px solid var(--secondary-color);
            color: var(--secondary-color);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-logout:hover {
            background-color: var(--secondary-color);
            color: var(--primary-color);
        }

        form {
            background-color: var(--dark-color);
            padding: 1.5rem;
            border-radius: 8px;
            max-width: 400px;
            color: var(--white-color);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }

        form label {
            display: block;
            margin-bottom: 0.3rem;
            font-weight: bold;
            color: var(--secondary-color);
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form select {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 4px;
            background-color: var(--light-pink-color);
            color: var(--white-color);
        }

        form input[type="submit"] {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            border: none;
            padding: 0.7rem 1.5rem;
            cursor: pointer;
            border-radius: 25px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #ccac00;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: var(--dark-color);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
            border-radius: 8px;
            overflow: hidden;
        }

        table th,
        table td {
            padding: 0.8rem;
            border-bottom: 1px solid var(--medium-gray-color);
            color: var(--white-color);
            text-align: left;
        }

        table th {
            background-color: var(--light-pink-color);
            color: var(--secondary-color);
        }

        table tr:hover {
            background-color: var(--medium-gray-color);
        }

        .btn-delete {
            background-color: transparent;
            border: 1.5px solid var(--secondary-color);
            color: var(--secondary-color);
            padding: 0.3rem 0.7rem;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-delete:hover {
            background-color: var(--secondary-color);
            color: var(--primary-color);
        }

        .message {
            margin-top: 0.5rem;
            color: var(--secondary-color);
            font-weight: bold;
        }

        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: var(--light-pink-color);
            color: var(--white-color);
        }

        table th,
        table td {
            border: 1px solid var(--medium-gray-color);
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: var(--primary-color);
            color: var(--secondary-color);
        }

        table tr:hover {
            background-color: var(--medium-gray-color);
        }

        @media (max-width: 600px) {
            nav ul {
                flex-direction: column;
                gap: 1rem;
            }

            form,
            table {
                width: 100%;
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">67 Cafe Admin</div>
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="admin_logout.php" class="btn-logout">Logout</a></li>
        </ul>
        <div class="welcome">Welcome, <?php echo $_SESSION['email']; ?></div>
    </nav>

    <main>

        <section>
            <h2>Add Employee</h2>
            <form method="post" action="admin_dashboard.php">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required />

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required />

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required />

                <label for="gender">Gender</label>
                <select name="gender" id="gender" required>
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <input type="submit" name="add_employee" value="Add Employee" />
                <?php if ($addMsg) echo "<div class='message'>$addMsg</div>"; ?>
            </form>
        </section>

        <section>
            <h2>Remove Employee</h2>
            <?php
            if ($employees && mysqli_num_rows($employees) > 0) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($emp = mysqli_fetch_assoc($employees)) {
                        ?>
                            <tr>
                                <td><?php echo $emp['name']; ?></td>
                                <td><?php echo $emp['email']; ?></td>
                                <td><?php echo $emp['gender']; ?></td>
                                <td>
                                    <a href="admin_dashboard.php?delete_id=<?php echo $emp['id']; ?>" class="btn-delete" onclick="return confirm('Delete this employee?');">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <p>No employees found.</p>
            <?php
            }
            ?>
        </section>

        <section>
            <h2>Recent Feedback / Contacts</h2>
            <div class="cards-container">
                <?php
                if ($contacts && mysqli_num_rows($contacts) > 0) {
                    while ($row = mysqli_fetch_assoc($contacts)) {
                        echo '<div class="card">';
                        echo '<h3>' . $row['name'] . '</h3>';
                        echo '<p><strong>Email:</strong> ' . $row['email'] . '</p>';
                        echo '<p>' . $row['message'] . '</p>';
                        echo '<small>Submitted: ' . $row['submission_date'] . '</small>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No recent feedback available.</p>';
                }
                ?>
            </div>
        </section>

        <section class="dashboard-section">
            <h2>Customer Orders</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Special Requests</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $order_sql = "SELECT * FROM orders ORDER BY order_date DESC";
                        $order_result = mysqli_query($con, $order_sql);

                        if (mysqli_num_rows($order_result) > 0) {
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($order_result)) {
                                echo "<tr>
                            <td>{$count}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['item']}</td>
                            <td>{$row['quantity']}</td>
                            <td>{$row['special_requests']}</td>
                            <td>{$row['order_date']}</td>
                        </tr>";
                                $count++;
                            }
                        } else {
                            echo "<tr><td colspan='9'>No orders found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>


    </main>

</body>

</html>