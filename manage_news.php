<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e1e1e1;
            margin: 0;
            padding: 1rem;

        }

        .news-container {
            padding-top: 4rem;
            max-width: 800px; /* Adjusted the width for better responsiveness */
            width: 100%;
      
           
        }

        .news-item {
            margin-bottom: 20px;
        }

        .news-title {
            color: #007bff;
        }

        .news-buttons a {
            margin-right: 10px;
            color: #28a745;
            text-decoration: none;
        }

        .news-buttons a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<a href="admin_dashboard.php">Back to Dashboard</a>

<div class="news-container">
    <div class="row">

    <?php
    include 'connect.php';

    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $newsId = $row['news_id'];
            $newsTitle = $row['news_title'];
            $newsDesc = $row['news_desc'];
            $newsImg = $row['news_img'];
            ?>
            
            <div class="col">
                <div class="card news-item" style="width: 18rem;">
                    <img src="<?= $newsImg ?>" class="card-img-top" alt="<?= $newsTitle ?>">
                    <div class="card-body">
                        <h5 class="card-title news-title"><?= $newsTitle ?></h5>
                        <p class="card-text"><?= $newsDesc ?></p>
                    </div>
                    <div class="card-body news-buttons">
                        <a href="edit_news.php?id=<?= $newsId ?>">Edit</a>
                        <a href="delete_news.php?id=<?= $newsId ?>" onclick="return confirm('Are you sure you want to delete this news?')">Delete</a>
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        echo "No news found.";
    }

    mysqli_close($conn);
    ?>
    </div>
</div>

</body>
</html>
