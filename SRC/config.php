<?php

$con = new mysqli("localhost:3307","root","","hire_net");

if($con -> connect_error){
    die("Connection failed".$con->connect_error);
}

else{
    //echo "Sucessful";
}

?>