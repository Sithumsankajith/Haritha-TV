<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // TODO: Validate and sanitize user input

    // Check the user credentials against the database
    $sql = "SELECT * FROM `admins` WHERE `admin_email` = '$email' AND `admin_pwd` = '$password'";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        header('location: admin_dashboard.php');
        exit();
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #218838;
        }

        .text-center {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container-md login-form">
        <h1 class="text-center mb-4">Admin Login</h1>
        <form method="post">
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input name="pass" type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
