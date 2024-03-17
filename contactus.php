<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="shortcut icon" href="./Assets/haritha-logo-2" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>::after
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

</style>

</head>
<body>
<div class="container-fluid">
    <?php
    include 'navbar.php';
    ?>
   </div> 

   <div class="container-md">
   <main>
    <h2>Contact Us</h2>
    <section class="contactus">
            <div>
            <?php
                    include 'connect.php'; // Include your database connection file

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Retrieve form data
                        $userName = $_POST['user_name'];
                        $userEmail = $_POST['user_email'];
                        $userSubject = $_POST['user_subject'];
                        $userMsg = $_POST['user_msg'];

                        // Insert data into the database
                        $sql = "INSERT INTO contact_requests (user_name, user_email, user_subject, user_msg) VALUES ('$userName', '$userEmail', '$userSubject', '$userMsg')";

                        if (mysqli_query($conn, $sql)) {
                            echo "Form submitted successfully!";
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                    }
                    ?>
            <form action="" method="post"><br>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="user_name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="user_email" required>

                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="user_subject" required>

                        <label for="message">Message:</label>
                        <textarea id="message" name="user_msg" rows="4" required></textarea>

                        <button type="submit">Submit</button>
                    </form>
            </div>
    <div class="container-fluid" style="padding-top: 6rem;">
          <div class="container-md">
            
              
              <p>We value your feedback and contributions. If you have news tips, event coverage requests, or general inquiries, feel free to reach out to us. Your voice matters, and we are here to listen.</p>
  
              <p>Contact Email:info@harithatvnews.com</p>

      </selectio>
              </main>
   </div>
   
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>