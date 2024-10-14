<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbname = "test";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

$Prenom = $_POST["prénom"];
$Nom = $_POST["name"];
$Email = $_POST["mail"];
$Username = $_POST["usrnme"];
$Password = $_POST["pswd"];
$PasswordConfirm = $_POST["pswd_confirm"];
if ($Password !== $PasswordConfirm) {
    header("Location: register_e.html");
    die();
} else {
    $sql = "INSERT INTO Eleve (Prénom, Nom, Email, password, username) VALUES ('$Prenom', '$Nom', '$Email', '$Password', '$Username')";

    if ($conn->query($sql) === true) {
        header("Location: login.html");
        die();
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
