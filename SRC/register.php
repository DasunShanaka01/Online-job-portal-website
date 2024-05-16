<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"/> 
    <title>Hire Net</title>
</head>
<style>

ul.menu{
    font-size: 25px;
    align-items: center;
}

a{
    text-decoration: none;
    color: rgb(23, 157, 235);
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


.container{
    text-align: left;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.label {
    display: block;
    margin-bottom: 5px;
}


footer{
    display: flex;
    background-color: #486788; 
}



#icons{
    position: absolute;
    padding-top: 50px;
}

#contact{
    position: absolute;
    left: 650px;
    padding-top: 20px;
}

#address{
    position: absolute;
    right: 500px;
    padding-top: 20px;
}

#qr_code{
    position: absolute;
    padding-top: 5px;
    left: 1400px;
}

#address{
    position: relative;
    left: 670px;
}

#right{
    position: absolute;
    left: 1250px;
    padding-top: 100px;
}

#login{
    background-color: rgb(23, 157, 235);
    color: white;
}

#login:hover{
    background-color: #414850;
}

hr{
    height:5px;
    background-color: black;
}
 
 /* Submit button styling */
 .btn{
    background-color: #3399cc;
    background-color: #2077bd;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.label {
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
    color: #333;
}

form {
    width: 70%;
    margin: auto;
    padding: 20px;
    border-radius: 45px;
    background-color: #f2f2f2;
  }
  
  fieldset {
    border: none;
  }
  
  h2 {
    color: #2077bd;
    margin-bottom: 15px;
  }
  
  /* Input and select styling */
  input[type=text],
  input[type=email],
  input[type=number],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
  }
  
  select {
    appearance: none; /* Remove default dropdown style */
  }
  
  option {
    font-size: 16px;
  }
  
  /* Label styling */
  label {
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
    color: #333;
  }
  
  /* Submit button styling */
  #submit {
    background-color: #2077bd;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  
  #submit:hover {
    background-color: #3399cc;
  }
  
  /* Horizontal line styling */
  hr {
    height: 1px;
    background-color: #ccc;
    margin-top: 30px;
  }


</style>
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
    <a href="../SRC/login.php">
        <button id="login" onclick="loginAlert()">LOG IN</button>
    </a>
    </header>
        

        <hr>
    
</body>



      <div class="container">
        <div class="box form-box">

        <?php 
         
         $con = new mysqli("localhost:3307","root","","hire_net");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

      

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            //echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<script>alert('Registrated successfully')</script>";
            //<p>Registration successfull!</p>
                   
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

            <header>Sign Up</header>
            <form action="" method="post" >
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required><br>
                </div>

                <div class="field"><br><br>
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
    
<hr>


<footer>
    <div id = "div1">
        <img class="c1" src="images/hirenetlogo.png" width="300px" height="200px">
        <img class="c1" id="icons" src="images/social media icons.png" width="250px" height="50px">
    </div>
    <div id="contact">
        <a id = "F_COUNTACT" href = "#COUNTACT US"><p>COUNTACT US<p></a>
        <p id = "telnum">+9401234567<br>
        +9476541230</p>
    </div>

    <div id="address">
        <center>
        <p>
            Hire Net,<br>
            No.16 ,Ward place,<br>
            Colombo 03, Sri Lanka<br>
            <a href="#hirenet.lk">hirenet.lk</a><br>
            <a href="#hirenet.lk">info@hirenet.lk</a>
        </p>
        </center>
    </div>

    <img class="c1" id="qr_code" src="images/qr code.png" width="120px" height="120px">
    <p id="right">@2024 Hirenet. All right reserved.</p>

</footer>


</body>
</html>