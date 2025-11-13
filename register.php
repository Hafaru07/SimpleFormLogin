<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Akun</title>
  <style>
    body {
      background: #f1f2f6;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .box {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      width: 320px;
      text-align: center;
    }
    input {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover { background: #1e7e34; }
    a { text-decoration: none; color: #007bff; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Daftar Akun Baru</h2>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit" name="register">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="index.php">Login</a></p>

    <?php
    include "koneksi.php";
    if (isset($_POST['register'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
      if (mysqli_num_rows($check) > 0) {
        echo "<p style='color:red;'>Username sudah dipakai!</p>";
      } else {
        $save = mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
        if ($save) {
          echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='index.php';</script>";
        } else {
          echo "<p style='color:red;'>Gagal daftar!</p>";
        }
      }
    }
    ?>
  </div>
</body>
</html>
