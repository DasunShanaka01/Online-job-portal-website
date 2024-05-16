<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Submit</title>
    <link rel="stylesheet" href="CV_Submit.css">
    <link rel="icon" type="image/png" href="hire_net_logo.png">
    <script src="submit_alerts.js" defer></script> <!-- Include the JavaScript file -->
</head>

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

    <!--Body-->
    <h1 align="center">Delete Resume</h1>
    <br><br>
    <form method="POST" action="CV_Delete.php">
        <fieldset>
            <lable style="font-size: 20px;">Enter Your CV Reference Number : </lable>
            <input type="number" name="ref_number"><br><br>

            <button id="submit" type="submit" value="delete">Delete</button>
        </fieldset>
    </form>
    <br>

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
