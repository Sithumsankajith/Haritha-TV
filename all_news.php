<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All news</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

<div class="container-md pt-4">
    <a href="index.php"><i class="bi bi-arrow-left-circle"></i> Back to home</a>
      <h3 class="text-center pb-3">HarithaTV News</h3>
      <hr>
      <div class="news">
          <div class="row justify-content-center">

              <?php
              include 'connect.php';

              $sql = "SELECT * FROM news ORDER BY news_date ASC";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $newsTitle = $row['news_title'];
                      $newsImage = $row['news_img'];
                      $newsContent = $row['news_desc'];
                      ?>

                      <div class="col">
                          <div class="card" style="width: 18rem;">
                              <img src="<?= $newsImage ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text"><?= $newsContent ?></p>
                              </div>
                          </div>
                      </div>

                      <?php
                  }
              } else {
                  echo "<p>No news available.</p>";
              }

              mysqli_close($conn);
              ?>

          </div>
      </div>
  </div>

</body>
</html>
