<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $newsId = $_GET["id"];

    // Validate $newsId to ensure it is a positive integer before using it in the query

    // Delete news from the database
    $deleteSql = "DELETE FROM news WHERE news_id = $newsId";
    $deleteResult = mysqli_query($conn, $deleteSql);

    if ($deleteResult) {
        // Redirect to manage_news.php after successful deletion
        header("Location: manage_news.php");
        exit();
    } else {
        echo "Error deleting news.";
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
