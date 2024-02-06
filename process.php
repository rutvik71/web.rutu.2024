<?php
require_once "connect.php";

$query = "INSERT INTO food (firstname, secondname, email, telephone) VALUES(?,?,?,?)";

$stmt = mysqli_prepare($connect, $query);
if(!$stmt){
    die("prepare failed:" . mysqli_error($connect));
}
$fname = $_POST["firstname"];
$lname = $_POST["secondname"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];


mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $telephone);
    if(mysqli_stmt_execute($stmt)){
        echo"data inserted successful,";
    }

 else {
    die("failed to insert". mysqli_error($connect));
 }

?>