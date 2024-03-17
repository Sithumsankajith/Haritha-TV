<?php
include 'connect.php';

// Check if user ID is provided in the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM contact_requests WHERE user_id = ?");
    $stmt->bind_param("i", $userId);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to the manage_contacts.php page after deletion
        header("Location: requests.php");
        exit();
    } else {
        // Display an error message if deletion fails
        echo "Error deleting contact request: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
mysqli_close($conn);
?>
