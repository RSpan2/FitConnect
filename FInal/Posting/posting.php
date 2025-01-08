<?php
session_start(); // Start the session

// Database credentials
$servername = "*******";
$username = "*******";
$password = "*******";
$dbname = "*******";

// Establish a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Debugging: Check if the session variable exists
if (!isset($_SESSION['user_id'])) {
    echo "Error: You must be logged in to create a post.";
    exit();
}

// Handle the POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate inputs
    $PostBody = trim($_POST['PostBody'] ?? '');
    $Tags = trim($_POST['Tags'] ?? '');
    $user_id = $_SESSION['user_id'];

    if (!empty($PostBody)) {
        $PostDate = date("Y-m-d"); // Get the current date

        // Prepare the SQL query
        $sql = "INSERT INTO Posts (User_ID, Post_Date, Post_Data, Tags) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters (user ID, date, post body, tags)
            $stmt->bind_param("isss", $user_id, $PostDate, $PostBody, $Tags);

            // Execute the statement
            if ($stmt->execute()) {
                // Redirect on successful insertion
                header("Location: https://css1.seattleu.edu/~rspannaus/returntohome.html");
                exit();
            } else {
                // Show SQL error
                echo "Error executing query: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing query: " . $conn->error;
        }
    } else {
        echo "Error: Please fill in the required fields (Post Body).";
    }
}

// Close the database connection
$conn->close();
?>
