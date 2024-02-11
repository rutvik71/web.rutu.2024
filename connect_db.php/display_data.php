<?php
// Include database connection
require_once "dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Display Data</h2>
    <table>
        <tr>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Email</th>
            <th>Telephone</th>
        </tr>
        <?php
        // SQL query to retrieve data from the database
        $sql = "SELECT * FROM food";
        $result = $connect->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["secondname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telephone"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }

        // Close connection
        $connect->close();
        ?>
    </table>
</body>
</html>
