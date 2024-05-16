<?php

require 'config.php';

// Check if email is provided in the POST request
if(isset($_POST["email"])) {
    
    $email = $_POST["email"];

    
    $sql = "DELETE FROM Post_job WHERE Email = ?";
    
    
    $stmt = $con->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("s", $email);
    
    // Execute the statement
    if($stmt->execute()) {
        
        echo "<script>alert('Record deleted successfully')</script>";
        echo "<script>setTimeout(() => { window.location.href = 'postjobnew.php'; }, 1000);</script>";
    } else {
        // Deletion failed
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // If email is not provided in the POST request
    echo "Email not provided";
}
?>