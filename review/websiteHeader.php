<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css" />
    <title>Hire Net</title>
</head>



<body>
   
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


    <hr>

</body>

</html>