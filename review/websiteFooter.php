<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="footer.css"/>
</head>

<style>
    /*Footer*/

footer{
    display: flex;
    background-color: #486788; 
}



#icons{
    position: absolute;
    padding-top: 50px;
}

#contact{
    position: absolute;
    left: 650px;
    padding-top: 20px;
}

#address{
    position: absolute;
    right: 500px;
    padding-top: 20px;
}

#qr_code{
    position: absolute;
    padding-top: 5px;
    left: 1400px;
}

#address{
    position: relative;
    left: 670px;
}

#right{
    position: absolute;
    left: 1250px;
    padding-top: 100px;
}

#login{
    background-color: rgb(23, 157, 235);
    color: white;
}

#login:hover{
    background-color: #414850;
}

hr{
    height:5px;
    background-color: black;
}
</style>
<body>
    
<hr>


<footer>
    <div id = "div1">
        <img class="c1" src="images/hire net logo.png" width="300px" height="200px">
        <img class="c1" id="icons" src="images/social media icons.png" width="250px" height="50px">
    </div>
    <div id="contact">
        <a id = "F_CONTACT" href = "#CONTACT US"><p>CONTACT US<p></a>
        <p id = "telnum">+9401234567<br>
        +9476541230</p>
    </div>

    <div id="address">
        <center>
        <p>
            Hire Net,<br>
            No.16 ,Ward place,<br>
            Colombo 03, Sri Lanka<br>
            <a href="#hirenet.lk">hirenet.lk</a><br>
            <a href="#hirenet.lk">info@hirenet.lk</a>
        </p>
        </center>
    </div>

    <img class="c1" id="qr_code" src="images/qr code.png" width="120px" height="120px">
    <p id="right">@2024 Hirenet. All right reserved.</p>

</footer>


</body>
</html>