<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["id"];
$newUsername = $_POST["usrnme"];
$newNom = $_POST["name"];
$newPrenom = $_POST["prénom"];
$newEmail = $_POST["mail"];
$newPassword = $_POST["psswd"];
$confirmPassword = $_POST["psswd_confirm"];

if ($newPassword !== $confirmPassword) {
    die("Passwords do not match.");
}

$sql = "UPDATE Eleve SET username='$newUsername', Nom='$newNom', Prénom='$newPrenom', Email='$newEmail', password='$newPassword' WHERE id=$id";

if ($conn->query($sql) === true) {
    header("Location: admindash.php");
    die();
} else {
    header("Location: admindash.php");
    die();
}

$conn->close();
?>
