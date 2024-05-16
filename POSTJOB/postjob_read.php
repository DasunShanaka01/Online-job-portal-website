<?php
require 'config.php';

$sql = "SELECT Email,App_email,J_title,J_type,Contact,Salary,J_category,Min_years,Max_years,Experience,Qualification,J_description,C_name,C_description,Website
        FROM Post_job";

$result = $con->query($sql);

if($result->num_rows>0)
{
    echo "<table border = '1'>";
    while($row = $result->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>".$row["Email"]."</td>"."<td>".$row["App_email"]."</td>".
         "<td>".$row["J_title"]."</td>".
         "<td>".$row["J_type"]."</td>".
         "<td>".$row["Contact"]."</td>".
         "<td>".$row["Salary"]."</td>".
         "<td>".$row["J_category"]."</td>".
         "<td>".$row["Min_years"]."</td>".
         "<td>".$row["Max_years"]."</td>".
         "<td>".$row["Experience"]."</td>".
         "<td>".$row["Qualification"]."</td>".
         "<td>".$row["J_description"]."</td>".
         "<td>".$row["C_name"]."</td>".
         "<td>".$row["C_description"]."</td>".
         "<td>".$row["Website"]."</td>";
         echo "</tr>";

    }
    echo "</table>";
}

else{
    echo "No Result";
}
$con->close();




















?>