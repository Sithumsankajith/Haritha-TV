<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Requests</title>
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
    <h2 class="text-center">Contact Requests</h2>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connect.php';

            $sql = "SELECT * FROM contact_requests";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $userId = $row['user_id'];
                    $userName = $row['user_name'];
                    $userEmail = $row['user_email'];
                    $userMsg = $row['user_msg'];
                   
                    ?>

                    <tr>
                        <td><?= $userId ?></td>
                        <td><?= $userName ?></td>
                        <td><?= $userEmail ?></td>
                        <td><?= $userMsg ?></td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteRequest(<?= $userId ?>)">Delete</button>
                        </td>
                    </tr>

                    <?php
                }
            } else {
                echo "<tr><td colspan='5'>No contact requests found.</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>

    <script>
        function deleteRequest(userId) {
            var securityCode = prompt('Enter the security code:');
            
            // Check if the security code matches
            if (securityCode === 'admin') {
                // Redirect to delete_request.php with the userId
                window.location.href = 'delete_request.php?id=' + userId;
            } else {
                alert('Invalid security code. Request not deleted.');
            }
        }
    </script>
</div>

<div class="container-md text-center">
    <a href="admin_dashboard.php"> Back to Dashboard</a>
</div>

</body>
</html>
