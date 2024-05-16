<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
    <h2>Contact us</h2>
    <a class="home-button" href="index.php">Home</a>

    <form action="addAction.php" method="post" name="add">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><textarea name="message" rows="5" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
