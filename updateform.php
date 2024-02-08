
<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
    <h2>Update Form</h2>
    <form action="processupdate.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Hidden input field for the record ID -->
        
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
        
        <label for="secondname">Secondname:</label>
        <input type="text" id="secondname" name="secondname" value="<?php echo $secondname; ?>">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br><br>
        
        <label for="telephone">Telephone:</label>
        <input type="number" id="telephone" name="telephone" value="<?php echo $telephone; ?>">
        
        
        <button type="submit">Update</button>
    </form>
</body>
</html>