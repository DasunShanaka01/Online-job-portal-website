<?php
require 'config.php';


$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$town = $_POST["town"];

//dropdown-list

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Qualification = $_POST["qualification"];
}

$University = $_POST["University"];
$year = $_POST["year"];
$Designation = $_POST["Designation"];
$Company = $_POST["Company"];
$Duration = $_POST["Duration"];

$sql = "INSERT INTO submit_resume VALUES('','$name','$email','$number','$town','$Qualification','$University','$year','$Designation','$Company','$Duration') ";

if($con->query($sql)){
    
    $last_id = $con->insert_id;
    include "CV_reviwe.php"; // link home page
    
    
}

else{
    echo "Error".$con->error;
}



?>

