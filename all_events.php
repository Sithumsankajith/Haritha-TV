<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

<div class="container-md pt-4">
    <a href="index.php"><i class="bi bi-arrow-left-circle"></i> Back to home</a>
      <h3 class="text-center pb-3">NSBM Events</h3>
      <hr>
      <div class="event">
          <div class="row justify-content-center">

              <?php
              include 'connect.php';

              $sql = "SELECT * FROM events ORDER BY event_date ASC";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $eventTitle = $row['event_title'];
                      $eventImage = $row['event_img'];
                      $eventContent = $row['event_desc'];
                      ?>

                      <div class="col">
                          <div class="card" style="width: 18rem;">
                              <img src="<?= $eventImage ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text"><?= $eventContent ?></p>
                              </div>
                          </div>
                      </div>

                      <?php
                  }
              } else {
                  echo "<p>No event available.</p>";
              }

              mysqli_close($conn);
              ?>

          </div>
      </div>
  </div>

</body>
</html>
