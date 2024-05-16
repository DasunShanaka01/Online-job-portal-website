<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM contactus WHERE id = $id");

// Check if deletion was successful
if ($result) {
    // Redirect to the main display page (index.php)
    header("Location: index.php");
} else {
    // If deletion fails, display an error message
    echo "<p><font color='red'>Error: Unable to delete data.</font></p>";
}
?>
