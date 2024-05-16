<?php

require 'config.php';


$last_id = $_POST["ref_number"];
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

if(empty($last_id) ||empty($name) || empty($email) || empty($number) || empty($town) || empty($Qualification) || empty($University) || empty($year) || empty($Designation) || empty($Company) || empty($Duration)){

    echo "ALL REQUIRE";
}

else{           /* UPDATING PART */

    $sql = "UPDATE submit_resume
    SET ID =  '$last_id' , Name = '$name' , Email = '$email' , contact = '$number' , Home_Town = '$town' , Qualification_type = '$Qualification' , University = '$University' , Graduated_year = '$year ' , Current_Designation = '$Designation' , Company_name = '$Company' , Work_Duration = '$Duration'
    WHERE ID = '$last_id'";

    if($con->query($sql)){

         include "CV_reviwe.php"; // link home page
 
    }

    else{
        echo "Error".$con->error;
    }
}



