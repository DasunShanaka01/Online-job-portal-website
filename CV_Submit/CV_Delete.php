<?php
require 'config.php';

$last_id = $_POST["ref_number"];

$sql = "DELETE FROM submit_resume
WHERE ID = '$last_id ' ";

if($con -> query($sql)){
    
     // Add JavaScript code to display a popup alert
     echo "<script>alert('Delete Successful');</script>";

    // include 'CV_reviwe.php';
    header("Location:CV_Submit.php");

}
else{
    echo "Not Success";
}


?>
