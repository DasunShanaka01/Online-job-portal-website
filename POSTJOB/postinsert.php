<?php



$con = new mysqli("localhost:3307", "root","", "hire_net");

$pEmail =   $_POST["email"];
$pAppemail = $_POST["apemail"];
$pj_title = $_POST["title"];
$pj_type = $_POST["type"];
$pcontact = $_POST["contact"];
$psalary = $_POST["salary"];
$pj_category = $_POST["category"];
$pmin_yrs = $_POST["minyears"];
$pmax_yrs = $_POST["maxyears"];
$pexperi = $_POST["experi"];
$pquali = $_POST["qualification"];
$pj_des = $_POST["description"];
$pc_name = $_POST["comname"];
$pc_des = $_POST["comdes"];
$pwebsite = $_POST["website"];

$sql = "INSERT INTO Post_job 
        VALUES ('$pEmail', '$pAppemail', '$pj_title', '$pj_type', '$pcontact', '$psalary', '$pj_category',
                 '$pmin_yrs', '$pmax_yrs', '$pexperi', '$pquali', '$pj_des', '$pc_name', '$pc_des', '$pwebsite')";

 if($con->query($sql))// query execute command
 {
    echo "<script>alert('Job details submitted successfully')</script>";
    echo "<script>setTimeout(() => { window.location.href = 'submission_confirmation.php'; }, 1000);</script>";
    
 }
 else{
    echo "Error".$con->error;
 }

 $con->close();

?>
