<?php
session_start();
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $stmt = "SELECT username, password from register where username='$username' and password='$password'";
    $result = $conn->query($stmt);
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("location: home.php");
        exit();
    } else {
        echo "<script>alert('Invalid');</script>";
    }
    $conn->close();
}
?>