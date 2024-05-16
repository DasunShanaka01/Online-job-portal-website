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



<form action="postjob_update.php" method="post" >
    <fieldset>

    
    <label >YOUR EMAIL</label><br>
    <input type="email" placeholder = "you@gmail.com" name = "email" required ><br><br>

    <label >APPLICATION EMAIL/URL</label><br>
    <input type="text" placeholder = "Enter an email address or website URL" name = "apemail"required><br><br>

    <label >JOB TITLE</label><br>
    <input type="text" name = "title"required><br><br>

    <label >JOB TYPE</label><br>
    <select id = "type" name = "type" required>
       <option value = "Contract">Contract</option>
       <option value = "Full-time">Full-time</option>
       <option value = "Part-time">Part-time</option>
       <option value = "Government">Government</option>
       <option value = "Internshihp">Internshihp</option>
       <option value = "Work-From-Home">Work-From-Home</option>

    </select>

    <br><br>

    <label>APPLICATION PHONE NUMBER</label><br>
    <input type="number" placeholder = "Ex : 777123123 " name = "contact" required><br><br>

    <label>MONTHLY SALARY (Rs)</label><br>
    <input type="number" placeholder = "Not specified" name = "salary" required><br><br>
  
    <label >JOB CATEGORY</label><br>
    <select id = "category" name = "category" required>

    <optionv value = "Accounting/Finance/Auditing">Accounting/Finance/Auditing</option>
    <option value = "Admin/clerk/Office assistant">Admin/clerk/Office assistant</option>
    <option value = "Agriculture/Diary/Fisheries">Agriculture/Diary/Fisheries</option>
    <option value = "Apprel/Garment/Clothing">Apprel/Garment/Clothing</option>
    <option value = "Architecture/Interior/Design">Architecture/Interior/Design</option>
    <option value = "Automative/aviation">Automative/aviation</option>
    <option value = "Banking/Finance">Banking/Finance</option>
    <option value = "Business developement/Strategy/Coporate palning">Business developement/Strategy/Coporate palning</option>
    <option value = "Carpentary/Woodwork/Furniture">Carpentary/Woodwork/Furniture</option>
    <option value = "Cashier">Cashier</option>
    <option value = "Cleaning/Maintance">Cleaning/Maintance</option>
    <option value = "Construction/Civil Engineering">Construction/Civil Engineering</option>
    <option value = "Data entry/Data formatting">Data entry/Data formatting</option>
    <option value = "Design/Art/Photography">Design/Art/Photography</option>
    <option value = "Education/teaching/Acadamic">Education/teaching/Acadamic</option>
    <option value = "Electronic/electrical">Electronic/electrical</option>
    <option value = "Engineering">Engineering</option>
    <option value = "Entertainment/Modeling/Acting">Entertainment/Modeling/Acting</option>
    <option value = "Fashion/beauty/design">Fashion/beauty/design</option>
    <option value = "General labor/Other">General labor/Other</option>
    <option value = "Government/Civil">Government/Civil</option>
    <option value = "Hospitality/Hotel/Tourism">Hospitality/Hotel/Tourism</option>
    <option value = "HR/recruitment">HR/recruitment</option>
    <option value = "Impots/exports/trading">Impots/exports/trading</option>
    <option value = "Insuarance">Insuarance</option>
    <option value = "IT">IT</option>
    <option value = "Law/Compliance">Law/Compliance</option>
    <option value = "Logistics/Warehouse/transport">Logistics/Warehouse/transport</option>
    <option value = "Management/Analysts">Management/Analysts</option>
    <option value = "Media/Marketing">Media/Marketing</option>
    <option value = "Medical/health">Medical/health</option>
    <option value = "Music/Composing/Entertainment">Music/Composing/Entertainment</option>
    <option value = "NGO/Charity">NGO/Charity</option>
    <option value = "property/real estate">property/real estate</option>
    <option value = "psycology/counseling">psycology/counseling</option>
    <option value = "Security">Security</option>
    <option value = "Spots/fitness">Spots/fitness</option>
    <option value = "Telecommunication/network">Telecommunication/network</option>
    <option value = "Veterinary/Animal care">Veterinary/Animal care</option>
    <option value = "Welder/painter/helper">Welder/painter/helper</option>
   </select>
    
   <br><br>

    <label>MINIMUM YEARS OF AGE</label><br>
    <input type="number" placeholder = "Not specified" name = "minyears" required><br><br>

    <label>MAXIMUM YEARS OF AGE</label><br>
    <input type="number" placeholder = "Not specified" name = "maxyears" required><br><br>
 
    <label>MINIMUM YEARS OF EXPERIENCE</label><br>
    <input type="number" placeholder = "Not specified" name = "experi" required><br><br>

    <label>MINIMUM QUALIFICATION LEVEL</label><br>
    
    <input type="radio" name = "qualification" >O/L
    <input type="radio" name = "qualification">A/L                         
    <input type="radio" name = "qualification">Degree
    <input type="radio" name = "qualification">No minimum qualification level
    
    <br><br>

    <label>JOB DESCRIPTION</label><br>
    <input type="text"  name = "description" required> <br><br>
    
    <h2>Company Details</h2>

    <label>COMPANY NAME</label><br>
    <input type="text" placeholder = "Enter the name of the company" name = "comname" required><br><br>

    <label>COMPANY DESCRIPTION</label><br>
    <input type="text" name = "comdes"><br><br>

    <label >WEBSITE</label><br>
    <input type="text" placeholder = "http:// " name = "website" required><br><br>

    <br><br><br>

   <button id = "submit" type="submit">Update Job </button>
    

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