<?php
$servername = "localhost";
$username = "david";
$password = "Admin1234";
$dbname = "login";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user =  $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user = '$user';";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
if (($row) && ($user == $row["user"]) && (password_verify($password, $row["password"]))) {

    session_start();
    $_SESSION["user"]=$user;
    header("Location: sesion.php");
} else{

    header("Location: login.html");
}
$conn->close();
