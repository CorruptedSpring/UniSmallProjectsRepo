<?php
$username = $_POST["Username"];
$password = $_POST["Password"];
if ($username == "admin" && $password == "admin") {
    header("Location: admindash.php");
    die();
} else {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbname = "test";
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT username, password FROM Eleve WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            header("Location: welcome.php?username={$row["username"]}");
            die();
        } else {
            header("Location: login_e.html");
            die();
        }
    } else {
        header("Location: login_e.html");
        die();
    }
    $conn->close();
}
?>
