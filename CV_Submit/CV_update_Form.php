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
    <h1 align="center">Update Resume</h1>
    <br><br>
    <form method="POST" action="CV_update.php">
        <fieldset>
            <lable style="font-size: 20px;">Enter Your CV Reference Number : </lable>
            <input type="number" name="ref_number">
            <h2>Personal Information</h2>
            <label>Your Name</label><br>
            <input type="text" name="name" placeholder="Enter your full name" required><br><br>

            <label>Your Email</label><br>
            <input type="email" name="email" placeholder="example@gmail.com" required><br><br>

            <label>Phone Number</label><br>
            <input type="tel" name="number" placeholder="Ex : 0771234567" required><br><br>

            <label>Your Home Town</label><br>
            <input type="text" name="town" placeholder="Ex : Colombo" required><br><br>

            <h2>Educational Qualifications</h2>
            <label for="qualification">Select Qualification type:</label>
            <select id="qualification" name="qualification" required>
                <option value="">Qualification type</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelors">Bachelors</option>
                <option value="Master">Master</option>
                <option value="PHD">PHD</option>
                <option value="Other">Other</option>
            </select>
            <br><br>

            <label>Enter your University/Institute</label><br>
            <input type="text" name="University"><br><br>

            <label>Enter Graduated year</label>
            <input type="number" name="year"><br><br>

            <h2>Work Experience</h2>
            <label>Current Designation</label>
            <input type="text" name="Designation"><br><br>

            <label>Current Company Name</label>
            <input type="text" name="Company"><br><br>

            <label>Work Duration</label>
            <input type="number" name="Duration" placeholder="Years"><br><br><br><br><br>
            <a href="#home">
                <button id="submit" value="update" type="submit">Update</button>
            </a>
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
