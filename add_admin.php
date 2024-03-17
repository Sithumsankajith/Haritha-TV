<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }
        .container-md {
            max-width: 500px;
        }
    </style>
</head>
<body>

<div class="container-md">
    <h2 class="text-center">Add Admin</h2>

    <?php
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adminEmail = $_POST['admin_email'];
        $adminPwd = $_POST['admin_pwd'];
        $adminName = $_POST['admin_name'];

        // TODO: Validate and sanitize user inputs

        $insertSql = "INSERT INTO admins (admin_email, admin_pwd, admin_name) VALUES ('$adminEmail', '$adminPwd', '$adminName')";
        $insertResult = mysqli_query($conn, $insertSql);

        if ($insertResult) {
            echo '<div class="alert alert-success" role="alert">Admin added successfully!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error adding admin: ' . mysqli_error($conn) . '</div>';
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="admin_email">Email:</label>
            <input type="email" class="form-control" id="admin_email" name="admin_email" required>
        </div>
        <div class="form-group">
            <label for="admin_pwd">Password:</label>
            <input type="password" class="form-control" id="admin_pwd" name="admin_pwd" required>
        </div>
        <div class="form-group">
            <label for="admin_name">Name:</label>
            <input type="text" class="form-control" id="admin_name" name="admin_name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Admin</button>
    </form>
</div>

</body>
</html>
