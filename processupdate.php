<?php
require_once "connect.php";


$id = $_GET['id'];
$query = "SELECT * FROM food WHERE id ";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, "id", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
if (!$row) {
    die("Record not found");
}
$firstname = $row['firstname'];
$secondname = $row['secondname'];
$email = $row['email'];
$telephone = $row['telephone'];


mysqli_stmt_close($stmt);
mysqli_close($connect);
?>
