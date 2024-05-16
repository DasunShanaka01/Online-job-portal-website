<?php
// submitReview.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $profileImage = $_FILES['profileImage'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    if ($_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {

        $profileImageName = uniqid() . '_' . $_FILES['profileImage']['name'];

        $targetDirectory = "img/";

        $targetFilePath = $targetDirectory . $profileImageName;

        if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $targetFilePath)) {

            include 'connect.php'; // Include database connection

            if ($connect->connect_error) {
                die("Connection failed: " . $connect->connect_error);
            }

            $sql = "INSERT INTO review (r_name, r_image, r_email, r_rating, r_review) VALUES ('$name', '$profileImageName', '$email', $rating, '$comment')";

            if ($connect->query($sql) === TRUE) {
                header('Location: review.php');
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $connect->error;
            }

            $connect->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Add Review</title>
    <style>

@layer demo {
  section h1 {
    text-wrap: balance;
    max-inline-size: 25ch;
    font-size: 32px;
    margin-top:100px;
    margin-bottom: 150px;
    color: white;
    text-shadow: 0 1px 1px #000;

  }
  
  .subhead {
    text-wrap: balance;
    max-inline-size: 60ch;
    font-size: 1.25rem;
    font-weight: 300;
    margin-inline: auto;
    color: hsl(0 0% 80%);
  }
  
  section {
    background: 
      linear-gradient(#000d 0 0),
      url("https://assets.codepen.io/2585/sean-pollock-PhYq704ffdA-unsplash.jpg");
    background-size: cover;
    background-position: center;
    display: grid;
    gap: 2ch;
    place-content: center;
    text-align: center;
  }
}

@layer demo.support {
  * {
    box-sizing: border-box;
    margin: 0;
  }

  html {
    block-size: 100%;
  }

  body {
    min-block-size: 100%;
    font-family: system-ui, sans-serif;
    display: grid;
  }
}
        
    </style>
</head>

<body>

    <?php include 'websiteHeader.php'; ?>

        <section>
            <h1>Add Review</h1>
        </section>

    <div class="container">
        
        <div class="col5">
            <form class="form" action="add_review.php" method="POST" enctype="multipart/form-data">
                <div class="ffeild">
                    <label class="flable" for="name">Name:</label>
                    <input class="fcontrol" type="text" id="name" name="name" required>
                </div>
                <div class="ffeild">
                    <label class="flable" for="profileImage">Profile Image:</label>
                    <input type="file" id="profileImage" name="profileImage" required>
                    <img class="uplodeImage" id="imagePreview" src="#" alt="Preview"
                        style="display: none; max-width: 200px; margin-top: 10px;">
                </div>
                <div class="ffeild">
                    <label class="flable" for="email">Email:</label>
                    <input class="fcontrol" type="email" id="email" name="email" required>
                </div>
                <div class="ffeild">
                    <label class="flable" for="rating">Rating:</label>
                    <div class="star-rating ffeild2">
                        <input type="radio" id="rating1" name="rating" value="1" required><label for="rating1"></label>
                        <input type="radio" id="rating2" name="rating" value="2"><label for="rating2"></label>
                        <input type="radio" id="rating3" name="rating" value="3"><label for="rating3"></label>
                        <input type="radio" id="rating4" name="rating" value="4"><label for="rating4"></label>
                        <input type="radio" id="rating5" name="rating" value="5"><label for="rating5"></label>
                    </div>
                </div>
                <div class="ffeild">
                    <label class="flable" for="comment">Comment:</label>
                    <textarea class="fcontrol" id="comment" name="comment" rows="4" required></textarea>
                </div>
                <div class="justify-center">
                    <input class="btn1" type="submit" value="Submit Review">
                </div>
            </form>
        </div>
    </div>
   


  <?php  include 'websiteFooter.php'; ?>




</body>
<script>
// Function to handle file input change
document.getElementById('profileImage').addEventListener('change', function(event) {
    var input = event.target;
    var reader = new FileReader();

    reader.onload = function() {
        var imagePreview = document.getElementById('imagePreview');
        imagePreview.src = reader.result;
        imagePreview.style.display = 'block'; // Show the image preview
    };

    // Read the selected image file
    reader.readAsDataURL(input.files[0]);
});
</script>

</html>