
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css"/>
    <title>Admin Page</title>
</head>

<!--Styles-->

<style>
    table{
        width: 100%;
    }

    #button{
        width: 90px;
        background-color: red;
        color: white;
    }

    h2,h1{
        color: #007bff;
    }


</style>



<body>      <!--HEADER-->
    <header>
        <a href="../home/ins.php">

             <img src="../images/hire net logo.png " width="300px" height="200px">

        </a>

        <center>
            <h1>Admin Page</h1>
        </center>

        <a href="../SRC/profile.php">
            <img id = "person_icon" src = "../images/Person_Icon-.jpg"width="95px" >
        </a>

         
            
    </header>
    <hr>

    <h2>CV SUBMITE</h2>

   
<?php
    require '../CV_Submit/config.php';
    
    $sql = "SELECT *
            From submit_resume";


$result = $con->query($sql);     /*Read part */

if($result -> num_rows){

    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th> ID </th><th> Name  </th> <th> Email  </th> <th> contact  </th> <th> Home_Town  </th> <th> Qualification_type  </th> <th> University  </th> <th> Graduated_year  </th> <th> Current_Designation  </th> <th> Company_name  </th> <th> Work_Duration  </th>";
    echo "</tr>";

    while($rows = $result -> fetch_assoc()){
        echo "<tr>";
        echo "<td>".$rows["ID"]."</td>"."<td>".$rows["Name"]."</td>"."<td>".$rows["Email"]."</td>"."<td>".$rows["contact"]."</td>"."<td>".$rows["Home_Town"]."</td>"."<td>".$rows["Qualification_type"]."</td>"."<td>".$rows["University"]."</td>"."<td>".$rows["Graduated_year"]."</td>"."<td>".$rows["Current_Designation"]."</td>"."<td>".$rows["Company_name"]."</td>"."<td>".$rows["Work_Duration"]."</td>";
        echo "</tr>";
    }

    echo "</table>";

    
}


else{
    echo "No results";
}

$con-> close();

?>
<br>

<form action = "admin_cv_delete.php" method ="POST">
    <lable>Enter delete Row ID : </lable>
    <input type = number name="id">
    <input id = "button" type="submit" value="Delete">
</form>



    
</body>
</html>