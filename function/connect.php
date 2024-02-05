<?php
$db_name="raghuveer";
$db_user="root";
$db_password="";
$db_host="localhost";
$connection = mysqli_connect($db_host, $db_user,  $db_password ,$db_name);
if(!$connection){
    echo "error";
}
else
{
    echo "connected successful";
}


?>