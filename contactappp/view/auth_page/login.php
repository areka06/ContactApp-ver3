<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/contactappp/view/auth_page/style.css">
</head>
<body>
  <div class="login-container">

    <h2>Login</h2>
    <form id="login-form">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-group has-validation">
          <input type="text" name="username" class="form-control" id="yourUsername" required>
        </div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
      <div class="tanya_login">
        <p class="Login">belum Punya akun? <a href="register">Register</a></p>
      </div>
    </form>
  </div>

</body>
</html>
