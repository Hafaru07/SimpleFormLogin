<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      background: #f5f6fa;
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
    h2 { color: #333; }
    input {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover { background: #0056b3; }
    a { text-decoration: none; color: #007bff; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Login</h2>
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
  </div>
</body>
</html>
