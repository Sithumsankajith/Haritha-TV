<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <title>Haritha TV News</title>
    <link rel="shortcut icon" href="./Assets/haritha-logo-2" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<style>

</style>

</head>
<body>
    <div class="container-fluid">
       
    <?php
        include 'navbar.php';
    ?>
<section id="home">
        <div class="container-fluid" style="padding-top: 6rem;">
            <div class="carousel">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://www.nsbm.ac.lk/wp-content/uploads/2023/11/NSBM-Foundation-2024January-Intake.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://www.nsbm.ac.lk/wp-content/uploads/2023/07/ICOBI_2023.jpg.webp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://www.nsbm.ac.lk/wp-content/uploads/2023/12/Business-Dialogue-2023Cover.jpg" class="d-block w-100" alt="...">
                      </div>
                      </div>
                      </div></div>
        
        <div class="container-md pt-4" >
                <h3>
                  <div class="animated-text">
                  <center> 
                    <span>H</span>
                    <span>A</span>
                    <span>R</span>
                    <span>I</span>
                    <span>T</span>
                    <span>H</span>
                    <span>A</span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span>T</span>
                    <span>V</span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </h3>
                  <hr>
                </center> 
                  </div>
          
                              </div>
                        </div>
                        <div class="animated-paragraph container-md">
                         <center> <p style="font-size: large;" id="paragraph"></p></center>
                        </div>
                        <script src="test.js"></script>
                    </div>
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
  <section id="news">
              <div class="container-md pt-4">
      <h3>Latest News</h3>
      <hr>
      <div class="news">
          <div class="row justify-content-center">

              <?php
              include 'connect.php';

              $sql = "SELECT * FROM news ORDER BY news_date ASC LIMIT 8";
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
  <div class="container-md text-center pt-4">

  <a href="all_news.php" class="btn btn-success"><i class="bi bi-newspaper"></i> View all news</a>

  </div>
       
  <div class="container-md pt-4">
      <h3>Latest Events</h3>
      <hr>
      <div class="news">
          <div class="row justify-content-center">

              <?php
              include 'connect.php';

              $sql = "SELECT * FROM events ORDER BY event_date ASC LIMIT 4";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $newsTitle = $row['event_title'];
                      $newsImage = $row['event_img'];
                      $newsContent = $row['event_desc'];
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
                  echo "<p>No event available.</p>";
              }

              mysqli_close($conn);
              ?>

          </div>
      </div>
  </div>

  <div class="container-md text-center pt-4">

<a href="all_events.php" class="btn btn-success"><i class="bi bi-calendar-event"></i> View all events</a>

</div>

</section>  

  <br>

<section id="promotions">
  <?php
        include 'promotion.php';
    ?> 
</section>
<br

<section id="about">

<?php
        include 'aboutus.php';
    ?> 

</section>
<br>

<section id="contactus">
<?php
        include 'contactus.php';
    ?> 
</section>
<br>

<section id="ourteam">
<?php
        include 'ourteam.php';
    ?> 
</section>

<!-- <section id="footer">
<?php
        include 'footer.php';
    ?> 
</section> -->




        
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>