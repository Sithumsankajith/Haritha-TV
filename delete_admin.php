<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $adminId = $_GET['id'];

    // Perform delete in the database
    $deleteSql = "DELETE FROM admins WHERE admin_id = $adminId";
    $deleteResult = mysqli_query($conn, $deleteSql);

    if ($deleteResult) {
        // Redirect to manage_admins.php after successful deletion
        header('Location: manage_admins.php');
        exit();

    } else {
        echo "Error deleting admin: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

mysqli_close($conn);
?>
