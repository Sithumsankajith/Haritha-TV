<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e1e1e1;
            margin: 0;
            padding: 1rem;

        }

        .event-container {
            padding-top: 4rem;
            max-width: 800px; /* Adjusted the width for better responsiveness */
            width: 100%;
      
           
        }

        .event-item {
            margin-bottom: 20px;
        }

        .event-title {
            color: #007bff;
        }

        .event-buttons a {
            margin-right: 10px;
            color: #28a745;
            text-decoration: none;
        }

        .event-buttons a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<a href="admin_dashboard.php">Back to Dashboard</a>

<div class="event-container">
    <div class="row">

    <?php
    include 'connect.php';

    $sql = "SELECT * FROM events";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $eventId = $row['event_id'];
            $eventTitle = $row['event_title'];
            $eventDesc = $row['event_desc'];
            $eventImg = $row['event_img'];
            ?>
            
            <div class="col">
                <div class="card event-item" style="width: 18rem;">
                    <img src="<?= $eventImg ?>" class="card-img-top" alt="<?= $eventTitle ?>">
                    <div class="card-body">
                        <h5 class="card-title event-title"><?= $eventTitle ?></h5>
                        <p class="card-text"><?= $eventDesc ?></p>
                    </div>
                    <div class="card-body event-buttons">
                        <a href="edit_event.php?id=<?= $eventId ?>">Edit</a>
                        <a href="delete_event.php?id=<?= $eventId ?>" onclick="return confirm('Are you sure you want to delete this event?')">Delete</a>
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        echo "No event found.";
    }

    mysqli_close($conn);
    ?>
    </div>
</div>

</body>
</html>
