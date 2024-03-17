<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<style>
    body{
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #0d0d10 , #0d0d10);

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
    }
    .btn{
        width: 200px;
        background-color: bisque;
        height: 2cm;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .btn:hover{
        background-color: white;
        color: black;
    }
    h2{
        color: white;
    
    }
    p{
        color: white;
    }
    .row{
        margin-left: 3cm;
    
    }
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="container-md text-center pt-3 pb-5">
        <h2>Admin Dashboard</h2>
    <p>Haritha tv admin dashboard</p>
        </div>

        <div class="container-md pt-5">
            <div class="row">
                <div class="col">
                <a href="add_news.php" class="btn">  <i class="bi bi-plus-circle-dotted"></i> Add news  </a>

                </div>
                <div class="col">
                <a href="add_events.php" class="btn"><i class="bi bi-plus-circle-dotted"></i> Add events</a>
    
                </div>
                <div class="col">
                <a href="manage_news.php" class="btn"><i class="bi bi-pencil-square"></i> Manage News</a>
    
                </div>
               
            </div>
            <div class="row pt-3">
            <div class="col">
                <a href="manage_events.php" class="btn"><i class="bi bi-pencil-square"></i>  Manage events</a>
    
                </div>
           
                <div class="col">
                <a href="manage_admins.php" class="btn"><i class="bi bi-pencil-square"></i> Manage Admins</a>
    
                </div>
                <div class="col">
                <a href="requests.php" class="btn"><i class="bi bi-telephone-x"></i> Requests</a>
    
                </div>
            </div>
        </div>
    </div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>