<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esport";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$otlet = $_POST["otlet"];
$nev = $_SESSION["fnev"];

$sql = "SELECT id FROM felhasznalok WHERE fnev = $nev";
$user_id = $sql;

$sql = "INSERT INTO otletek (otletek, user_id) VALUES ('$otlet', '$user_id')";
if ($conn->query($sql) === TRUE) {
    echo "Sikeres regisztráció";
    header('Location: ../fooldal.php');
    exit;
} else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
}
