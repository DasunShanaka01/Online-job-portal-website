<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);  
    
    // Check for empty fields
    if (empty($name) || empty($email) || empty($message)) {
        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

        if (empty($message)) {
            echo "<font color='red'>Message field is empty.</font><br/>";
        }
    } else {
        // Update the database table
        $result = mysqli_query($mysqli, "UPDATE contactus SET `name` = '$name', `email` = '$email', `message` = '$message' WHERE `id` = $id");
        
        if ($result) {
            // Display success message
            echo "<p><font color='green'>Data updated successfully!</font></p>";
            echo "<a href='index.php'>View Result</a>";
        } else {
            // Display error message if update fails
            echo "<p><font color='red'>Error: Unable to update data.</font></p>";
        }
    }
}
?>
