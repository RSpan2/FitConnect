<?php
$servername = "*******";
$username = "*******";
$password = "*******";
$dbname = "*******";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $User_Age = $_POST['User_Age'];
    $User_Weight = $_POST['User_Weight'];
    $User_GoalWeight = $_POST['User_GoalWeight'];
    $Username = $_POST['Username'];
    $User_Password = $_POST['User_Password'];
    $User_FirstName = $_POST['User_FirstName'];
    $User_LastName = $_POST['User_LastName'];
    $password_hash = password_hash($User_Password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO UserAccount (User_Age, User_Weight, User_GoalWeight, User_Password, Username, User_FirstName, User_LastName) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiissss", $User_Age, $User_Weight, $User_GoalWeight, $password_hash, $Username, $User_FirstName, $User_LastName);

    if ($stmt->execute()) {
        echo "Registration successful! <a href='https://css1.seattleu.edu/~rspannaus/login.html'>Login here";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>