<!DOCTYPE html>
<html>
<head>
   <title>Post a job</title>
    <link rel = "stylesheet" href = "postjob.css">
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

h1{
    text-align: center;
    
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
    <a href="../SRC/login.php">
        <button id="login" onclick="loginAlert()">LOG IN</button>
    </a>
    </header>




<?php
require 'config1.php';

$sql = "SELECT Email, App_email, J_title, J_type, Contact, Salary, J_category, Min_years, Max_years, Experience, Qualification, J_description, C_name, C_description, Website
        FROM Post_job";

$result = $con->query($sql);

if ($result->num_rows > 0) {

    echo "<h1>Job Details</h1>";


    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Email</th>";
    echo "<th>Application Email</th>";
    echo "<th>Job Title</th>";
    echo "<th>Job Type</th>";
    echo "<th>Contact</th>";
    echo "<th>Salary</th>";
    echo "<th>Job Category</th>";
    echo "<th>Min Years</th>";
    echo "<th>Max Years</th>";
    echo "<th>Experience</th>";
    echo "<th>Qualification</th>";
    echo "<th>Job Description</th>";
    echo "<th>Company Name</th>";
    echo "<th>Company Description</th>";
    echo "<th>Website</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["App_email"] . "</td>";
        echo "<td>" . $row["J_title"] . "</td>";
        echo "<td>" . $row["J_type"] . "</td>";
        echo "<td>" . $row["Contact"] . "</td>";
        echo "<td>" . $row["Salary"] . "</td>";
        echo "<td>" . $row["J_category"] . "</td>";
        echo "<td>" . $row["Min_years"] . "</td>";
        echo "<td>" . $row["Max_years"] . "</td>";
        echo "<td>" . $row["Experience"] . "</td>";
        echo "<td>" . $row["Qualification"] . "</td>";
        echo "<td>" . $row["J_description"] . "</td>";
        echo "<td>" . $row["C_name"] . "</td>";
        echo "<td>" . $row["C_description"] . "</td>";
        echo "<td>" . $row["Website"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No Result";
}
$con->close();
?>

<br><br>

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
