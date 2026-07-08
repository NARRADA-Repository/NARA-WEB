<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard with Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="sidebar.css">
  <script src="https://kit.fontawesome.com/4b9d6d6e6c.js" crossorigin="anonymous"></script>
  <style>
    #wrapper {
  display: flex;
  width: 100%;
  align-items: stretch;
  height: 100vh;
 
}

#sidebar-wrapper {
  min-width: 250px;
  max-width: 250px;
  transition: all 0.3s;
   background-color:#004374;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: -250px;
}

.list-group-item {
  border: none;
}

.list-group-item:hover {
  background-color: rgba(255,255,255,0.1);
}
#logo_db{
    width: 100px;
    height: 100px;
}

  </style>
</head>
<body>
<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-dark border-end" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 bg-primary text-white">
      <img src="img/logo.png" class="rounded-circle me-2" alt="Logo" id="logo_db">
      <span></span>
    </div>
    <div class="list-group list-group-flush">

      <!-- Main Category 1 -->
      <a class="list-group-item list-group-item-action bg-dark text-white" data-bs-toggle="collapse" href="#menu1" role="button">
        <i class="fas fa-layer-group"></i> Dashboard
      </a>
      <div class="collapse" id="menu1">
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page1.php">Sub 1</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page2.php">Sub 2</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page3.php">Sub 3</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page4.php">Sub 4</a>
      </div>

      <!-- Repeat for 5 categories -->
      <a class="list-group-item list-group-item-action bg-dark text-white" data-bs-toggle="collapse" href="#menu2">📊 News</a>
      <div class="collapse" id="menu2">
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="news.php">Add News</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page2.php">Sub 2</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page3.php">Sub 3</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page4.php">Sub 4</a>
      </div>

      <a class="list-group-item list-group-item-action bg-dark text-white" data-bs-toggle="collapse" href="#menu3">⚙️ Vacancy</a>
      <div class="collapse" id="menu3">
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page1.php">Sub 1</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page2.php">Sub 2</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page3.php">Sub 3</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page4.php">Sub 4</a>
      </div>

      <a class="list-group-item list-group-item-action bg-dark text-white" data-bs-toggle="collapse" href="#menu4">📁 Procurement </a>
      <div class="collapse" id="menu4">
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page1.php">Sub 1</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page2.php">Sub 2</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page3.php">Sub 3</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page4.php">Sub 4</a>
      </div>

      <a class="list-group-item list-group-item-action bg-dark text-white" data-bs-toggle="collapse" href="#menu5">🛠️ Setting</a>
      <div class="collapse" id="menu5">
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page1.php">Sub 1</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page2.php">Sub 2</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page3.php">Sub 3</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page4.php">Sub 4</a>
      </div>
       <a class="list-group-item list-group-item-action bg-dark text-white" data-bs-toggle="collapse" href="#menu6">🛠️ Division</a>
      <div class="collapse" id="menu6">
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page1.php">Sub 1</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page2.php">Sub 2</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page3.php">Sub 3</a>
        <a href="#" class="list-group-item list-group-item-action sub-link" data-page="content/page4.php">Sub 4</a>
      </div>

    </div>
  </div>

  <!-- Page Content -->
  <div id="page-content-wrapper" class="w-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <div class="container-fluid">
        <button class="btn btn-primary" id="menu-toggle">☰</button>
        <div class="ms-auto">
          <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
      </div>
    </nav>
    <div class="container-fluid mt-3" id="contentArea">
      <h3>Welcome <?php echo $_SESSION["username"]; ?> 🎉</h3>
      <p>Select a sub-category from the left menu.</p>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelectorAll(".sub-link").forEach(link => {
  link.addEventListener("click", function(e){
    e.preventDefault();
    let page = this.getAttribute("data-page");

    // Debug in console
    console.log("Loading page:", page);

    fetch(page, {cache: "no-cache"})
      .then(res => {
        if (!res.ok) throw new Error("HTTP error " + res.status);
        return res.text();
      })
      .then(data => {
        document.getElementById("contentArea").innerHTML = data;
      })
      .catch(err => {
        document.getElementById("contentArea").innerHTML = 
          `<div class="alert alert-danger">❌ Error loading ${page}: ${err}</div>`;
      });
  });
});
</script>
</body>
</html>
