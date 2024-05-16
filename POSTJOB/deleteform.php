<!DOCTYPE html>
<html>
<head>
   <title>Delete Job</title>
    <link rel="stylesheet" href="postjob.css">
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





</style>

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
    
    <body>
    <h1 align="center">Delete A Job</h1>
    <br><br>
    <form method="POST" action="postjob_delete.php">
        <fieldset>
            <label style="font-size: 20px;">Enter Your Email : </label>
            <input type="email" placeholder="you@gmail.com" name="email" required><br><br>
            <button id="submit" type="submit" value="delete">Delete</button>
        </fieldset>
    </form>
    <br>

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