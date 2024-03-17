<?php
include 'connect.php'; // Assuming you have a database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $newsTitle = mysqli_real_escape_string($conn, $_POST['news_title']);
    $newsDesc = mysqli_real_escape_string($conn, $_POST['news_desc']);

    // Process the image file
    $targetDir = "img/news/";
    $targetFile = $targetDir . basename($_FILES["news_img"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["news_img"]["tmp_name"]);
    if ($check !== false) {
        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["news_img"]["tmp_name"], $targetFile)) {
            // Insert data into the database
            $sql = "INSERT INTO news (news_title, news_desc, news_img) VALUES ('$newsTitle', '$newsDesc', '$targetFile')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('News added successfully.');</script>";
            } else {
                echo "<script>alert('Error adding news.');</script>";
            }
        } else {
            echo "<script>alert('Error uploading image.');</script>";
        }
    } else {
        echo "<script>alert('Invalid image file.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-md {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        h2 {
            color: #007bff;
        }

        label {
            font-weight: bold;
            color: #495057;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container-md">
        <h2 class="text-center mb-4">Add News</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="news_title">News Title:</label>
                <input type="text" class="form-control" id="news_title" name="news_title" required>
            </div>
            <div class="form-group">
                <label for="news_desc">News Description:</label>
                <textarea class="form-control" id="news_desc" name="news_desc" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="news_img">News Image:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="news_img" name="news_img" required>
                    <label class="custom-file-label" for="news_img">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
        <div class="bckdash text-center pt-4">
        <a  href="admin_dashboard.php">Back to Dashboard</a>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

