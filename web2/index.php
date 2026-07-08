<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NARA | Language Selection</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: url('https://th.bing.com/th/id/R.dabb052406b98ad53abf976db0679e31?rik=Es5Oobx0kFRC%2bg&riu=http%3a%2f%2f4.bp.blogspot.com%2f-cQ4XnoW4Ysc%2fTzbg3Jh25VI%2fAAAAAAAAA74%2fxFjSDny2SqU%2fs1600%2f21.Jpg&ehk=Q88y%2b7a98mHBLzs3%2fXLC4iuSw8LOmnic8Q%2bqgUPUcpg%3d&risl=&pid=ImgRaw&r=0') no-repeat center center/cover;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    a{
      text-decoration:none;
    }
    .card {
      background: rgba(255,255,255,0.15);
      padding: 40px;
      border-radius: 15px;
      backdrop-filter: blur(10px);
      text-align: center;
      color: #fff;
      width: 320px;
    }
    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      margin-bottom: 15px;
    }
    .logo-container img {
      display: block;
      height: 70px;
      object-fit: contain;
    }
    h2 {
      margin-bottom: 20px;
      font-weight: 600;
    }
    .lang-btn {
      display: block;
      margin: 15px auto;
      padding: 15px;
      background: rgba(255,255,255,0.9);
      border: none;
      border-radius: 10px;
      font-size: 1.1rem;
      font-weight: bold;
      color: #0d47a1;
      cursor: pointer;
      transition: 0.3s;
      width: 200px;
    }
    .lang-btn:hover {
      background: #0d47a1;
      color: #fff;
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <div class="card">
    <!-- Logo container with two logos side by side -->
    <div class="logo-container">
      <img src="img/glogo.png" alt="National Logo">
      <img src="img/logo.png" alt="NARA Logo">
    </div>

    <h2>Select Your Language</h2>
   

 <a class="lang-btn" href="home.php#googtrans(si)">සිංහල</a>
  <a class="lang-btn" href="home.php#googtrans(ta)">தமிழ்</a>
  <a class="lang-btn" href="home.php#googtrans(en)">English</a>
 
  </div>


</body>
</html>
