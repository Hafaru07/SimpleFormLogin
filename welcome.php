<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Selamat Datang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #dff9fb;
      text-align: center;
      padding-top: 100px;
    }
    button {
      background: #dc3545;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover { background: #c82333; }
  </style>
</head>
<body>
  <h1>Hai, <?php echo $_SESSION['username']; ?> 👋</h1>
  <p>Selamat datang di dashboard kamu!</p>
  <a href="logout.php"><button>Logout</button></a>
</body>
</html>
