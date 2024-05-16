<?php

require '../CV_Submit/config.php';

$C_id = $_POST["id"];

$sql = "DELETE FROM submit_resume
WHERE ID = '$C_id'";

if($con->query($sql)){
    echo "Deleted";
}
else{
    echo "Not Success";
}


?>