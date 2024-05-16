<?php
require 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to prevent SQL injection
    $Email = mysqli_real_escape_string($con, $_POST["email"]);
    $App_email = mysqli_real_escape_string($con, $_POST["apemail"]);
    $J_title = mysqli_real_escape_string($con, $_POST["title"]);
    $J_type = mysqli_real_escape_string($con, $_POST["type"]);
    $Contact = mysqli_real_escape_string($con, $_POST["contact"]);
    $Salary = mysqli_real_escape_string($con, $_POST["salary"]);
    $J_category = mysqli_real_escape_string($con, $_POST["category"]);
    $Min_years = mysqli_real_escape_string($con, $_POST["minyears"]);
    $Max_years = mysqli_real_escape_string($con, $_POST["maxyears"]);
    $Experience = mysqli_real_escape_string($con, $_POST["experi"]);
    $Qualification = isset($_POST["qualification"]) ? mysqli_real_escape_string($con, $_POST["qualification"]) : ""; // Radio button value
    $J_description = mysqli_real_escape_string($con, $_POST["description"]);
    $C_name = mysqli_real_escape_string($con, $_POST["comname"]);
    $C_description = isset($_POST["comdes"]) ? mysqli_real_escape_string($con, $_POST["comdes"]) : ""; // Optional field
    $Website = mysqli_real_escape_string($con, $_POST["website"]);

    // SQL update query
    $sql = "UPDATE Post_job SET
            App_email = '$App_email',
            J_title = '$J_title',
            J_type = '$J_type',
            Contact = '$Contact',
            Salary = '$Salary',
            J_category = '$J_category',
            Min_years = '$Min_years',
            Max_years = '$Max_years',
            Experience = '$Experience',
            Qualification = '$Qualification',
            J_description = '$J_description',
            C_name = '$C_name',
            C_description = '$C_description',
            Website = '$Website' 
            WHERE Email = '$Email'";

    // Perform update
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Record Updated successfully')</script>";
        echo "<script>setTimeout(() => { window.location.href = 'submission_confirmation.php'; }, 1000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
} else {
    echo "Form not submitted.";
}
?>