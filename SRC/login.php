<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css"> <!-- Assuming this is the correct path to your CSS file -->
    <title>Login</title>
</head>
<body>

<div class="container">
    <div class="box form-box">
        <?php 

            $con = new mysqli("localhost:3307","root","","hire_net");

            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                if($email === "dasun@123" && $password === "dasun@123") {
                    // Redirect admin to admin dashboard 
                    header("Location:../Admin/Admin.php");
                    exit(); // Stop further execution
                }
 
                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    session_start();
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='login.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location:../home/ins.php"); // Assuming this is the correct path to your file
                }
            }
        ?>
        <header>Login</header>
        <form method="post">
            <div class="field input">
                <div class="label"><label for="email">Email</label></div>
                <div class="input-field"><input type="text" name="email" id="email" autocomplete="off" required></div>
            </div>

            <div class="field input">
                <div class="label"><label for="password">Password</label></div>
                <div class="input-field"><input type="password" name="password" id="password" autocomplete="off" required></div>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Login">
            </div>
            <div class="links">
                Don't have an account? <a href="../SRC/register.php">Sign Up Now</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
