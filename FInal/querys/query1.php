<?php
$servername = "*******";
$username = "*******";
$password = "*******";
$dbname = "*******";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the SQL query to select all from the Posts table
$sql = "SELECT UA.User_FirstName, UA.User_LastName, P.Post_Data
FROM UserAccount UA
INNER JOIN Posts P ON UA.User_ID = P.User_ID";

// Execute the query
$result = mysqli_query($conn, $sql);

if ($result) {
    // Check if the query returns a result set (e.g., SELECT)
    if ($result instanceof mysqli_result) {
        echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
        echo "<tr>";

        // Fetch and display table headers
        $field_info = mysqli_fetch_fields($result);
        foreach ($field_info as $field) {
            echo "<th>" . htmlspecialchars($field->name) . "</th>";
        }
        echo "</tr>";

        // Fetch and display table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } else {
        // For non-SELECT queries
        echo "Query executed successfully.";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>