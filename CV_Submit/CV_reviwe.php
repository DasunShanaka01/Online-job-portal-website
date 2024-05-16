<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Submit</title>
    <link rel="stylesheet" href="CV_Submit.css">
    <link rel="icon" type="image/png" href="../images/hire net logo.png">
    <script src="submit_alerts.js" defer></script> <!-- Include the JavaScript file -->
</head>

        <!--Styles-->

<style>
    body {
        font-family: Arial, sans-serif;
    
        margin: 0;
        padding: 0;
    }
    h2 {
        text-align: center;
        margin-top: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    .btn-container {
        text-align: center;
        margin-top: 20px;
    }
    .btn-container a {
        text-decoration: none;
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin: 0 10px;
        transition: background-color 0.3s;
    }
    .update-btn {
        background-color: yellow;
        color: black;
    }
    .delete-btn {
        background-color: red;
        color: white;
    }
    .update-btn:hover, .delete-btn:hover {
        background-color: #ffa500; /* darker shade of yellow for update button */
    }

    #refer{
        color: red;
    }

</style>


<body>
                            <!--Header-->
    <header>
        <img src="../images/hire net logo.png" width="300px" height="200px">
        <ul class="menu">
            <li><a class="menu" id="home" href="../home/ins.php">HOME</a></li>
            <li><a class="menu" id="li1" href="../review/joblist.php">JOBS</a></li>
            <li><a class="menu" id="li1" href="../POSTJOB/postjobnew.php">POST A JOB</a></li>
            <li><a class="menu" id="li1" href="../review/review.php">REVIEWS</a></li>
            <li><a class="menu" id="COUNTACT" href="../contact_kanishka/index.php">CONTACT US</a></li>
        </ul>
        <a href="../SRC/profile.php">
        <img id="person_icon" src="../images/Person_Icon-.jpg" width="95px">
    </a>
    <?php if(isset($_SESSION['Email'])): ?>
                        <li><form action="../SRC/logout.php" method="POST" id="login"><button type="submit">Log in</button></form></li>
                    <?php else: ?>
                        <li><a href="../SRC/login.php" class="button" id="login">Logout</a></li>
                    <?php endif; ?>
    </header>


                <!--Read-->
 
<?php
echo "<center><h1> PREVIEW YOUR CV </h1></center>";

require 'config.php';




echo "<h2>Your CV Reference Number  <div id = 'refer'>$last_id </div></h2>";

$sql = "SELECT *
        FROM submit_resume
        where ID = '$last_id' ";


$result = $con->query($sql);     /*Read part */

if($result -> num_rows){

    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th> ID </th><th> Name  </th> <th> Email  </th> <th> contact  </th> <th> Home_Town  </th> <th> Qualification_type  </th> <th> University  </th> <th> Graduated_year  </th> <th> Current_Designation  </th> <th> Company_name  </th> <th> Work_Duration  </th>";
    echo "</tr>";

    while($rows = $result -> fetch_assoc()){
        echo "<tr>";
        echo "<td>".$rows["ID"]."</td>"."<td>".$rows["Name"]."</td>"."<td>".$rows["Email"]."</td>"."<td>".$rows["contact"]."</td>"."<td>".$rows["Home_Town"]."</td>"."<td>".$rows["Qualification_type"]."</td>"."<td>".$rows["University"]."</td>"."<td>".$rows["Graduated_year"]."</td>"."<td>".$rows["Current_Designation"]."</td>"."<td>".$rows["Company_name"]."</td>"."<td>".$rows["Work_Duration"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
}


else{
    echo "No results";
}

$con-> close();



?>

<br><br>

<div class="btn-container">
    <a class="btn update-btn" href="CV_update_Form.php"><b>UPDATE CV</b></a>
    <a class="btn delete-btn" href="CV_Delete.php"><b>DELETE CV</b></a>
</div>

    <br><br><br><br>

    <!--Footer-->
    <hr>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="../images/hire net logo.png" alt="Hire Net Logo">
            </div>
            <div class="footer-contact">
                <a href="#CONTACT US"><b>Contact Us</b></a>
                <p><a href="tel:+9401234567">+9401234567</a><br><a href="tel:+9476541230">+9476541230</a></p>
            </div>
            <div class="footer-address">
                <center>
                    <p>
                        Hire Net,<br>
                        No.16, Ward place,<br>
                        Colombo 03, Sri Lanka<br>
                        <a href="mailto:info@hirenet.lk">info@hirenet.lk</a><br>
                    </p>
                </center>
            </div>
            <div class="footer-social">
                <img src="../images/social media icons.png" alt="Social Media Icons">
            </div>
            <div class="footer-qr">
                <img src="../images/qr code.png" alt="QR Code">
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2024 Hirenet. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>