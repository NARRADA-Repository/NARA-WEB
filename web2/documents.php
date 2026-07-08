<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Documents </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <!-- Owl -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- End Owl -->
  <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
<link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/carasole.css">
             <link rel="stylesheet" href="css/mega.css">
            <style>
              .search-section {
      background: #f8f9fa;
      border-radius: 15px;
      padding: 40px;
      margin-bottom: 40px;
      position: relative;
    }
 
    .search-input {
      border-radius: 30px;
      padding: 12px 20px;
    }
    .search-btn {
      border-radius: 30px;
      background: linear-gradient(to right, #001A33, #001A33);
      border: none;
      padding: 10px 25px;
      color: #fff;
      display: flex;
      justify-content:center;
    }
    .stat-card {
      background: #fff;
      color: #333;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    .filter-btns button {
      margin: 5px;
      border-radius: 25px;
    }
    .card-custom {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      transition: 0.3s;
    }
    .card-custom:hover {
      transform: translateY(-5px);
    }
     .btn-outline-light{
      color:#333 !important;
      border-color: #001A33 ;
    }
      .btn-outline-light:hover{
      color:#333 !important;
      border-color: #6b98e6ff ;
    }
    .btn-check:active+.btn-primary, .btn-check:checked+.btn-primary, .btn-primary.active, .btn-primary:active, .show>.btn-primary.dropdown-toggle {
       border-color: #001A33 !important;
    }

            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <!--<div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Documents</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Documents</h6>
        </div>
    </div>-->
    <!-- Page Header End -->

    <!-- Document Section -->

    
<div class="container py-5">

  <!-- Search Section -->
  <div class="search-section">
    <h3 class="fw-bold text-dark">
      <i class="bi bi-folder-fill"></i> NARA Resources Center
    </h3>
    <p class="text-secondary">
      Downloads & Resources - Essential forms, guidelines, and documents for aquaculture
    </p>
    <form class="d-flex mt-3">
      <input type="text" class="form-control search-input me-2" placeholder="Search documents...">
      <button type="submit" class="search-btn">
        <i class="bi bi-search"></i> Search
      </button>
    </form>
  </div>

  <!-- Top Stats -->
  <div class="row g-4 text-center mb-5">
    <div class="col-md-3">
      <div class="stat-card">25 <br> Total Documents</div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">1,234 <br> Downloads Today</div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">2025 <br> Last Updated</div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">7 <br> Categories</div>
    </div>
  </div>

  <!-- Filter Buttons -->
  <div class="d-flex justify-content-center flex-wrap filter-btns mb-5">
    <button class="btn btn-primary active" data-filter="all">All Documents</button>
    <button class="btn btn-outline-light" data-filter="application">RTI Forms</button>
    <button class="btn btn-outline-light" data-filter="license">RTI Reports</button>
    <button class="btn btn-outline-light" data-filter="guidelines">Technical Guidelines</button>
    <button class="btn btn-outline-light" data-filter="manuals">Training Manuals</button>
    <button class="btn btn-outline-light" data-filter="policies">Acts & Policies</button>
    <button class="btn btn-outline-light" data-filter="reports">Annual Reports</button>
   
  </div>

  <!-- Document Cards -->
  <div class="row" id="doc-cards">
    <div class="col-md-4 mb-4 card-item application">
      <div class="card-custom">
        <h5>Aquaculture License Application</h5>
        <p>Complete application form for new aquaculture license with requirements</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 card-item license">
      <div class="card-custom">
        <h5>Export Permit Application</h5>
        <p>Application for seafood export permit including quality certificates</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 card-item application">
      <div class="card-custom">
        <h5>Hatchery Registration Form</h5>
        <p>Registration form for shrimp and fish hatchery operations</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 card-item guidelines">
      <div class="card-custom">
        <h5>Technical Manual</h5>
        <p>Step-by-step guide for aquaculture practices</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 card-item reports">
      <div class="card-custom">
        <h5>Annual Report 2024</h5>
        <p>Performance and statistics for the last year</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 card-item policies">
      <div class="card-custom">
        <h5>Policy Guidelines</h5>
        <p>Acts & policies for fisheries and aquaculture</p>
      </div>
    </div>
  </div>
</div>

    <!-- End Document Section -->



<?php
    require('footer.php');
?>
 <!-- Linking Swiper script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
<script src="js/carasole.js"></script>
   <script src="js/script.js"></script>
     <script src="js/chat.js"></script>
    <script>
    // Force GTranslate to apply the language from URL hash
    (function() {
      var hash = window.location.hash;
      if (hash && hash.indexOf('googtrans') > -1) {
        var lang = hash.split('(')[1].split(')')[0]; // en, si, ta
        localStorage.setItem('gt-lang', lang);
        document.cookie = "googtrans=/auto/" + lang + "; path=/";
        document.cookie = "googtrans=/en/" + lang + "; path=/";
      }
    })();
  </script>

  <script>
    window.gtranslateSettings = {
      default_language: "en",
      languages: ["en","si","ta"]
    };
  </script>
  <script src="https://cdn.gtranslate.net/widgets/latest/ln.js" defer></script>
<script>
   const filterButtons = document.querySelectorAll(".filter-btns button");
  const cards = document.querySelectorAll(".card-item");

  filterButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Remove active class from all
      filterButtons.forEach(b => b.classList.remove("btn-primary"));
      filterButtons.forEach(b => b.classList.add("btn-outline-light"));

      // Add active class to clicked button
      btn.classList.remove("btn-outline-light");
      btn.classList.add("btn-primary");

      const filter = btn.getAttribute("data-filter");

      cards.forEach(card => {
        if (filter === "all" || card.classList.contains(filter)) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
</script>
</body>
</html>