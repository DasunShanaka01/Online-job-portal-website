
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Linking External CSS -->
    <link  rel="stylesheet"href="ins.css">
</head>
<style>
    /*Header*/

ul.menu{
    font-size: 25px;
    align-items: center;
}

a{
    text-decoration: none;
    color: rgb(108, 141, 160);
    text-align: center;
    border-radius: 600px;
}

li a:hover {
    background-color: #414850;
    color:white;
}

li{
    display: inline;
}

header{
    background-color: #486788; 
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px;
}

#login{ 
    background-color:rgb(23, 157, 235);
    color:white;
    cursor: pointer;
    padding: 8px 16px;
    transition: all 0.3s ease;
}

#login:hover {
    background-color: #555a5c;
  }


@media (max-width: 768px) {
    header {
        flex-direction: column; /* Stack elements vertically on small screens */
        align-items: center;
    }
}
hr{
    height:5px;
    background-color: black;
}

.menu{
    color: rgb(23, 157, 235);
    display: flex;
    padding: 16px 32px;
    transition: background-color 0.3s ease;
    
}

#person_icon, #login {
    margin: 8px auto; /* Center icons and button horizontally */
}


    /*Footer*/

footer {
    background-color: #486788; 
    padding: 20px;
    display: flex;
    flex-wrap: wrap; 
    justify-content: space-between; 
  }
  
  .footer-container {
    display: flex;
    flex-wrap: wrap; 
    width: 100%; 
  }
  
  .footer-logo,
  .footer-contact,
  .footer-address,
  .footer-social,
  .footer-qr {
    flex: 1; 
    text-align: center;
    padding: 10px;
  }
  
  .footer-logo img {
    width: 250px; 
    height: auto; 
  }
  
  .footer-contact a {
    color: #007bff; 
    text-decoration: none; 
    transition: all 0.2s ease-in-out; 
    font-size: 18px;
  }
  
  .footer-contact a:hover {
    color: black; 
  }
  
  .footer-contact{
    margin-top: 29px;
  }

  .footer-contact p {
    margin-top: 5px; 
  }
  
  .footer-address p {
    line-height: 1.5;
    font-size: 18px;
  }
  
  .footer-social img{
    width: 250px; 
    height: auto; 
  }
  .footer-qr img {
    width: 150px; 
    height: auto; 
  }
  
  .footer-copyright {
    width: 100%; 
    text-align: center; 
    padding: 10px;
    background-color: #ddd; 
  }

  
@media only screen and (max-width: 768px){
    
}

/* container */

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        .featured {
            text-align: center;
            margin-bottom: 40px;
        }

        .featured h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .featured p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }

        .cta {
            text-align: center;
            margin-top: 40px;
        }

        .cta a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 12px 24px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .cta a:hover {
            background-color: #0056b3;
        }

/* Features Section */
.features {
            margin-top: 50px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .feature {
            width: 30%;
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .feature h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .feature p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        /* Testimonials Section */
        .testimonials {
            margin-top: 50px;
            text-align: center;
        }

        .testimonial {
            width: 60%;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .testimonial p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }

        .testimonial .author {
            font-weight: bold;
            color: #333;
            margin-top: 10px;
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
    <img id="person_icon" src="../images/Person_Icon-.jpg" width="95px"></a>
<!-- </a>

    <button id="login"><a href="../SRC/login.php">LOG IN</a></button>
</a> -->

<?php if(isset($_SESSION['Email'])): ?>
                        <li><form action="../SRC/logout.php" method="POST" id="login"><button type="submit">Log in</button></form></li>
                    <?php else: ?>
                        <li><a href="../SRC/login.php" class="button" id="login">Logout</a></li>
                    <?php endif; ?>
</header>
<hr>


<!-- Main Content -->
<div class="container">
    <div class="main-content">
        <div class="featured">
            <h1>Welcome to Hire Net</h1>
            <p>Find your dream job or post job opportunities for others. Join our community today!</p>
        </div>
        <div class="cta">
            <a href="../review/joblist.php">Browse Jobs</a>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features">
        <div class="feature">
            <h2>Easy to Use</h2>
            <p>Our platform is designed to be user-friendly, making it easy for you to navigate and find what you need.</p>
        </div>
        <div class="feature">
            <h2>Wide Range of Jobs</h2>
            <p>Explore a diverse selection of job opportunities across various industries and sectors.</p>
        </div>
        <div class="feature">
            <h2>Connect with Employers</h2>
            <p>Connect directly with employers and recruiters to showcase your skills and experience.</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="testimonial">
            <p>"Hire Net helped me land my dream job in no time. The platform is intuitive and user-friendly, and I highly recommend it to anyone looking for employment."</p>
            <p class="author">- John Doe</p>
        </div>
        <div class="testimonial">
            <p>"I've been using Hire Net for recruiting new talent for my company, and I've been impressed with the quality of candidates I've found. It's a fantastic platform for both job seekers and employers."</p>
            <p class="author">- Jane Smith</p>
        </div>
    </section>
</div>








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

<!-- Footer End -->

</body>
</html>


