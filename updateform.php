
<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
    <h2>Update Form</h2>
    <form action="processupdate.php" method="post">
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

        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Hidden input field for the record ID -->
        
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
        
        <label for="secondname">Secondname:</label>
        <input type="text" id="secondname" name="secondname" value="<?php echo $secondname; ?>">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        
        <label for="telephone">Telephone:</label>
        <input type="number" id="telephone" name="telephone" value="<?php echo $telephone; ?>">

        
        <button type="submit">Update</button>
    </form>
</body>
</html>