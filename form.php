<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>
    <form action="process.php" method="post">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname"><br>
        <label for="secondname">Second Name:</label><br>
        <input type="text" id="secondname" name="secondname"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="telephone">Telephone:</label><br>
        <input type="numeric" id="telephone" name="telephone"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
