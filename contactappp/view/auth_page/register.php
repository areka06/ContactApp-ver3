<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="/contactappp/view/auth_page/stylee.css">

    
</head>
<body>
  <div class="register-container">

    <h2>Register</h2>
    <form id="register-form">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-group has-validation">
          <input type="text" name="username" class="form-control" id="yourUsername" required>
        </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" id="Email" name="Email" required>
      </div>

      <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input type="text" id="Alamat" name="Alamat" required>
      </div>

      <button type="submit">Daftar</button>
      <div class="tanya_login">
        <p class="Login">Sudah Punya akun? <a href="login">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>