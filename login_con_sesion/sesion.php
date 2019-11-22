<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.html");
} 
echo "Bienvenidos a la grieta del invocador " . $_SESSION['user'] . "<br>";
echo "<a href='singout.php'>unset session</a>";
