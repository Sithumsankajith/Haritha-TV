<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admins</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="container-md">
    <h2 class="text-center">Manage Admins</h2>
    <a href="add_admin.php" class="btn btn-primary mb-3">Add New Admin</a>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>Name</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connect.php';

            $sql = "SELECT * FROM admins";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $adminId = $row['admin_id'];
                    $adminEmail = $row['admin_email'];
                    $adminPwd = $row['admin_pwd'];
                    $adminName = $row['admin_name'];
                   
                    ?>

                    <tr>
                        <td><?= $adminId ?></td>
                        <td><?= $adminEmail ?></td>
                        <td><?= $adminPwd ?></td>
                        <td><?= $adminName ?></td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteAdmin(<?= $adminId ?>)">Delete</button>
                        </td>
                    </tr>

                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>No admins found.</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>

    <script>
        function deleteAdmin(adminId) {
            var securityCode = prompt('Enter the security code:');
            
            // Check if the security code matches
            if (securityCode === 'admin_del_true') {
                // Redirect to delete_admin.php with the adminId
                window.location.href = 'delete_admin.php?id=' + adminId;
            } else {
                alert('Invalid security code. Admin not deleted.');
            }
        }
    </script>
</div>

<div class="container-md text-center">
    <a href="admin_dashboard.php"> Back to Dashboard</a>
</div>

</body>
</html>
