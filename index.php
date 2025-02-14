
<?php

include 'config/connection.php';

$query = "SELECT * FROM users";
$stmt = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>User Management System</title>
</head>
<body>
<div class="container">
    <h1>User Management</h1>
    <a href="public/register.php">Register New User</a>
    <a href="public/login.php" style="float: right; margin: 10px;">Login</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>
</body>
</html>
