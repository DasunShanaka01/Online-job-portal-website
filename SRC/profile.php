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

.center {
    text-align: center;
}

.main-box {
    width: 60%;
    margin: 50px auto;
    background-color: #8fd3f7;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.title {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

.box {
    margin-bottom: 10px;
}

.btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
}

.btn:hover {
    background-color: #0056b3;
}

.bottom {
    margin-top: 10px;
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

<?php 
   session_start();

   $con = new mysqli("localhost:3307","root","","hire_net");
   if(!isset($_SESSION['valid'])){
    header("Location: home/ins.php");
   }
?>

<head>
    <title>Profile</title>
</head>
<body>

   

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }

            if(isset($_POST['delete_profile'])) {
              $id = $_SESSION['id'];
           
              $delete_query = mysqli_query($con, "DELETE FROM users WHERE Id=$id");
              if($delete_query) {
                 
                  echo "Deleted successfully";
                  exit;
              } else {
                 
                  echo "Error deleting profile.";
              }
          }
            ?>
            

    <main> 
       
        
    <center>
       <div class="main-box top">
         <h1 class="title">Profile</h1>
          <div class="top ">
          <div class="bottom"> 
          <div class="bottom"> 

            <div class="box">
              <p> Name : <b><?php echo $res_Uname ?></b></p>
            </div>
            </div>
            <div class="bottom"> 
            
            <div class="box">
                <p>Email : <b><?php echo $res_Email ?></b></p>
            </div> 
            </div>
            <div class="bottom"> 

            <div class="box">
                <p>Age : <b><?php echo $res_Age ?></b></p> 
            </div>
            </div>

            </div>
          </div>
          <div class="top">           
          <a href="logout.php"> <button class="btn">Log Out</button> </a> 
          <a href="edit.php?Id=<?php echo $res_id ?>"><button class="btn"> Edit </button></a> <br>
          <form action="" method="post">
            <button class="btn" name="delete_profile">Delete Profile</button>
          </form>
          </div>
          
          
            
       </div>
      </center>

    </main>
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
</body>
</html>