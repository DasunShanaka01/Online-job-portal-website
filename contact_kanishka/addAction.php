<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
    // Escape special characters in string for use in SQL statement
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

        // Show link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // If all the fields are filled (not empty) 

        // Insert data into database
        $result = mysqli_query($mysqli, "INSERT INTO contactus (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')");
        
        if ($result) {
            // Display success message
            echo "<p><font color='green'>Data added successfully!</font></p>";
            echo "<a href='index.php'>View Result</a>";
        } else {
            // Display error message if insertion fails
            echo "<p><font color='red'>Error: Unable to add data.</font></p>";
        }
    }
}
?>
</body>
</html>
