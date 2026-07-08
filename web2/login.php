<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login (AJAX)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      margin: 0;
      background: url('img/img2.png') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-card {
      background: rgba(255, 255, 255, 0.92);
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.35);
      padding: 2rem;
      width: 100%;
      max-width: 400px;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h3 class="text-center mb-4">Login NARA </h3>
    <div id="alertBox"></div>
    <form id="loginForm">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function(e){
      e.preventDefault();

      let formData = new FormData(this);

      fetch("login_action.php", {
        method: "POST",
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if(data.status === "success"){
          window.location.href = "admin/dashboard.php";
        } else {
          document.getElementById("alertBox").innerHTML =
            `<div class="alert alert-danger">${data.message}</div>`;
        }
      })
      .catch(err => {
        console.error(err);
      });
    });
  </script>
</body>
</html>
