<?php
session_start();
$servername = "*******";
$username = "*******";
$password = "*******";
$dbname = "*******";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT User_ID, User_Password FROM UserAccount WHERE Username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($user_id, $password_hash);
    $stmt->fetch();

    if ($user_id && password_verify($password, $password_hash)) {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        header("Location: https://css1.seattleu.edu/~rspannaus/GymSocialMedia.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}
$conn->close();
?>
