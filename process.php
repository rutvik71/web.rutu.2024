<?php
// Include database connection
require_once "connect.php";

// Process form data
if (isset($_POST['firstname'], $_POST['secondname'], $_POST['email'], $_POST['telephone'])) {
    // Get form data
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // Prepare SQL statement to insert data into the database
    $query = "INSERT INTO food (firstname, secondname, email, telephone) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($query);

    if (!$stmt) {
        echo "Prepare failed: " . $connect->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param("ssss", $firstname, $secondname, $email, $telephone);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect user to a success page
        header("Location: form.php");
        exit();
    } else {
        echo "Execute failed: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Form not submitted";
}

// Close connection
$connect->close();
?>
