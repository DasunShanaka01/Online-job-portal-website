<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css"/>
    <title>Admin Page</title>
    <style>
        /* Internal CSS */
        button.logout {
            background-color: #dc3545; /* Red color */
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
        }
        button.logout:hover {
            background-color: #c82333; /* Darker red color on hover */
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header Styles */
        header {
            background-color: #486788;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            color: white;
            margin: 0;
            font-size: 24px;
        }

        header img {
            width: 200px;
            height: auto;
        }

        button.logout {
            background-color: #dc3545;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button.logout:hover {
            background-color: #c82333;
        }

        /* Main Content Styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .button-container a {
            text-decoration: none;
        }

        .button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        #person_icon {
            width: 95px;
            height: auto; /* Maintain aspect ratio */
        }

    </style>


</head>


<body>
    <!--HEADER-->
    <header>
        <a href="../home/ins.php">
            <img src="../images/hire net logo.png" alt="Hire Net Logo">
        </a>
        <h1>Admin Page</h1>
        <a href="../SRC/profile.php">
            <img id="person_icon" src="../images/Person_Icon-.jpg" alt="Person Icon">
        </a>
        <!-- Logout button -->
        <form action="../SRC/logout.php" method="post">
            <button class="logout" type="submit">Logout</button>
        </form>
    </header>
    <hr>
 <!-- Main Content -->
 <div class="container">
        <!-- Buttons for various actions -->
        <div class="button-container">
            <a href="Admin_CV.php" class="button">View CV</a>
            <a href="../review/review_Admin/manage_review.php" class="button">View Review</a>
            <a href="../POSTJOB/read.php" class="button">View Post a Job</a>
        </div>
    </div>

</body>
</html>
