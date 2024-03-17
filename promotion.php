<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./Assets/haritha-logo-2" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>;

        main {
            padding: 20px;
            margin-top: 60px;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        section {
            margin-bottom: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

    </style>
</style>
</head>
<body>
<section id="promotion">
<div class="container-fluid">
    <?php
    include 'navbar.php';
    ?>
   </div> 
   
   <div class="container-md">
   <main>
   
            <h2>Advertisements</h2>
            <p>Promote your business or event with our advertising packages. Choose from the following options:</p>

            <table>
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basic</td>
                        <td>One-time mention in our news segment</td>
                        <td>$50</td>
                    </tr>
                    <tr>
                        <td>Standard</td>
                        <td>Three mentions throughout the day</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td>Premium</td>
                        <td>Featured placement and five mentions</td>
                        <td>$200</td>
                    </tr>
                </tbody>
            </table>
    </section>
         </main>
   </div>



        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>