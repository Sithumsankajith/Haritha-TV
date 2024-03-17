<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $eventId = $_GET["id"];

    // Validate $newsId to ensure it is a positive integer before using it in the query

    // Delete news from the database
    $deleteSql = "DELETE FROM events WHERE event_id = $eventId";
    $deleteResult = mysqli_query($conn, $deleteSql);

    if ($deleteResult) {
        // Redirect to manage_news.php after successful deletion
        header("Location: manage_events.php");
        exit();
    } else {
        echo "Error deleting event.";   
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
