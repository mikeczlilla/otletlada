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

$stmt = mysqli_prepare($conn, "SELECT id FROM felhasznalok WHERE fnev = ?");
mysqli_stmt_bind_param($stmt, "s", $nev);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $user_id);
mysqli_stmt_fetch($stmt);

/*
$stmt = mysqli_prepare($conn, "INSERT INTO otletek (otletek, user_id) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, 'ss', $otlet, $user_id);
mysqli_stmt_execute($stmt);
*/
mysqli_query($conn, "INSERT INTO otletek (otletek, user_id) VALUES ('$otlet', '$user_id')");

/*
$sql = "INSERT INTO otletek (otletek, user_id) VALUES ('$otlet', '$user_id')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

mysqli_close($conn);
?>