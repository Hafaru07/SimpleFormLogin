<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {
  $_SESSION['username'] = $username;
  header("Location: welcome.php");
} else {
  echo "<script>alert('Username atau password salah!'); window.history.back();</script>";
}
?>
