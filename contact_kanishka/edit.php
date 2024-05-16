<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM contactus WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$email = $resultData['email'];
$message = $resultData['message'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Message</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
    <h2>Edit Feedback</h2>
    <p>
        <a href="index.php" class="home-button">Home</a>
    </p>
    
    <form name="edit" method="post" action="editAction.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><textarea name="message" rows="5" cols="30"><?php echo $message; ?></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
