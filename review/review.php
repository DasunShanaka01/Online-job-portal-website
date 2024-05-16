<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View Reviews</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .reviews-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    .review-card {
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .profile-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .profile-pic {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .name {
        font-size: 1.2rem;
        margin: 0;
    }

    .display-rating {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }

    .display-rating label {
        font-size: 24px;
        cursor: pointer;
        color: #ccc;
        /* Default color for unfilled stars */
    }

    .display-rating .filled {
        color: #fbd702;
        /* Yellow color for filled stars */
    }

    /* Style unfilled stars */
    .display-rating .unfilled {
        color: #ccc;
        /* Light gray color for unfilled stars */
    }

    .comment p {
        margin: 0;
    }

    @layer demo {
  h1 {
    text-wrap: balance;
    max-inline-size: 25ch;
    font-size: clamp(2rem, 5vw, 5rem);
    margin-inline: auto;
    color: white;
    text-shadow: 0 1px 1px #000;
    margin-top: 100px;
  }
  
  .subhead {
    text-wrap: balance;
    max-inline-size: 60ch;
    font-size: 1.25rem;
    font-weight: 300;
    margin-inline: auto;
    color: hsl(0 0% 80%);
    margin-bottom: 150px;
  }
  
  section {
    background: 
      
      url("img/reviewhero.jpg");
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
    box-sizing: content-box-box;
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

/* Button styles */
.add-review-btn {
    display: inline-block;
    background-color: rgb(23, 157, 2350); /* Light blue color */
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 20px; /* Adjust as needed for roundness */
    transition: background-color 0.3s ease;
    margin-bottom: 50px;
}

.add-review-btn:hover {
    background-color: #ADD8E6; /* Darker shade of blue on hover */
}

/* Center the button */
section {
    text-align: center;
}
    </style>
<body>

<?php include 'websiteHeader.php';?>
<br>
<section>
  <h1>Reviews</h1>
  <p class="subhead">Indeed wall of love</p>
  <a href="add_review.php" class="add-review-btn">Add Review</a>
</section>


    <div class="reviews-container">
        <?php
        include 'connect.php';

        // Fetch reviews from the database
        $sql = "SELECT * FROM review";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class='review-card'>";
                echo "<div class='profile-info'>";
                echo "<img src='img/" . $row["r_image"] . "' alt='Profile Image' class='profile-pic'>";
                echo "<h2 class='name'>" . $row["r_name"] . "</h2>";
                echo "</div>";
                echo "<div class='rating'>";
                echo "<div class='display-rating'>";
                for ($i = 1; $i <= 5; $i++) { // Assuming 5 stars is the maximum
                    if ($i <= $row["r_rating"]) {
                        echo "<label for='rating{$i}' class='filled'>&#9733;</label>";
                    } else {
                        echo "<label for='rating{$i}'>&#9733;</label>";
                    }
                }
                echo "</div>";
                echo "</div>";
                echo "<div class='comment'>";
                echo "<p>" . $row["r_review"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $connect->close();
        ?>
    </div>

    <?php include 'websiteFooter.php'; ?>

</body>

</html>