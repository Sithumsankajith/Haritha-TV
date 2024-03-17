<?php
include 'connect.php';

// Initialize variables
$eventId = $eventTitle = $eventDesc = $eventImg = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission for updating event
    $eventId = $_POST['event_id'];
    $updatedTitle = $_POST['updated_title'];
    $updatedDesc = $_POST['updated_desc'];

    // Check if a new image file is provided
    if ($_FILES['updated_img']['error'] == UPLOAD_ERR_OK) {
        // Handle image upload
        $targetDir = "img/events/";
        $targetFile = $targetDir . basename($_FILES['updated_img']['name']);
        move_uploaded_file($_FILES['updated_img']['tmp_name'], $targetFile);

        // Update the event image in the database
        $updateImgSql = "UPDATE events SET event_img = '$targetFile' WHERE event_id = $eventId";
        $updateImgResult = mysqli_query($conn, $updateImgSql);

        if (!$updateImgResult) {
            echo "Error updating event image: " . mysqli_error($conn);
        }
    }

    // Perform update in the database for title and description
    $updateSql = "UPDATE events SET event_title = '$updatedTitle', event_desc = '$updatedDesc' WHERE event_id = $eventId";
    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        // Redirect to manage_event.php or any other desired page after successful update
        header('Location: manage_events.php');
        exit();
    } else {
        echo "Error updating event: " . mysqli_error($conn);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Fetch existing event data
    $eventId = $_GET['id'];
    $sql = "SELECT * FROM events WHERE event_id = $eventId";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $eventTitle = $row['event_title'];
        $eventDesc = $row['event_desc'];
        $eventImg = $row['event_img'];
    } else {
        echo "event not found.";
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
    <title>Edit event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container-md pt-4">
    <h2 class="text-center">Edit event</h2>
    <form method="POST" action="edit_event.php" enctype="multipart/form-data">
        <!-- Include a hidden input field for the event_id -->
        <input type="hidden" name="event_id" value="<?= $eventId ?>">
        
        <div class="form-group">
            <label for="updated_title">Event Title:</label>
            <input type="text" class="form-control" id="updated_title" name="updated_title" value="<?= $eventTitle ?>" required>
        </div>
        <div class="form-group">
            <label for="updated_desc">Event Description:</label>
            <textarea class="form-control" id="updated_desc" name="updated_desc" required><?= $eventDesc ?></textarea>
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
