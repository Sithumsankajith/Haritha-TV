<?php
include 'connect.php';

// Initialize variables
$newsId = $newsTitle = $newsDesc = $newsImg = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission for updating news
    $newsId = $_POST['news_id'];
    $updatedTitle = $_POST['updated_title'];
    $updatedDesc = $_POST['updated_desc'];

    // Check if a new image file is provided
    if ($_FILES['updated_img']['error'] == UPLOAD_ERR_OK) {
        // Handle image upload
        $targetDir = "img/news/";
        $targetFile = $targetDir . basename($_FILES['updated_img']['name']);
        move_uploaded_file($_FILES['updated_img']['tmp_name'], $targetFile);

        // Update the news image in the database
        $updateImgSql = "UPDATE news SET news_img = '$targetFile' WHERE news_id = $newsId";
        $updateImgResult = mysqli_query($conn, $updateImgSql);

        if (!$updateImgResult) {
            echo "Error updating news image: " . mysqli_error($conn);
        }
    }

    // Perform update in the database for title and description
    $updateSql = "UPDATE news SET news_title = '$updatedTitle', news_desc = '$updatedDesc' WHERE news_id = $newsId";
    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        // Redirect to manage_news.php or any other desired page after successful update
        header('Location: manage_news.php');
        exit();
    } else {
        echo "Error updating news: " . mysqli_error($conn);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Fetch existing news data
    $newsId = $_GET['id'];
    $sql = "SELECT * FROM news WHERE news_id = $newsId";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $newsTitle = $row['news_title'];
        $newsDesc = $row['news_desc'];
        $newsImg = $row['news_img'];
    } else {
        echo "News not found.";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container-md pt-4">
    <h2 class="text-center">Edit News</h2>
    <form method="POST" action="edit_news.php" enctype="multipart/form-data">
        <!-- Include a hidden input field for the news_id -->
        <input type="hidden" name="news_id" value="<?= $newsId ?>">
        
        <div class="form-group">
            <label for="updated_title">News Title:</label>
            <input type="text" class="form-control" id="updated_title" name="updated_title" value="<?= $newsTitle ?>" required>
        </div>
        <div class="form-group">
            <label for="updated_desc">News Description:</label>
            <textarea class="form-control" id="updated_desc" name="updated_desc" required><?= $newsDesc ?></textarea>
        </div>
        <div class="form-group">
            <label for="updated_img">Update Image:</label>
            <input type="file" class="form-control-file" id="updated_img" name="updated_img">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
