<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbname = "test";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["username"])) {
    $Username = $_GET["username"];
    $sql = "DELETE FROM Eleve WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $Username);

    if ($stmt->execute()) {
        header("Location: admindash.php");
        die();
    } else {
        header("Location: admindash.php");
        die();
    }
    $stmt->close();
} else {
    echo "No username specified.";
}
$conn->close();
?>
