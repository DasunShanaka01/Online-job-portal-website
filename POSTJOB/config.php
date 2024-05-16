<?php

$con = new mysqli("localhost:3307", "root","", "hire_net");

if($con -> connect_error)
{
    die("Connection error".$con ->connect_error);
}


?>