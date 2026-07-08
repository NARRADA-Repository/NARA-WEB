<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Act </title>
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
               .nav-label {
      padding: .5rem 1rem;
      font-weight: bold;
      color: #333;
      cursor: default;
      border: none;
    }
    .nav-label i {
      transition: transform 0.3s ease;
    }
    .rotate-up {
      transform: rotate(180deg);
    }
    
 #v-pills-tab .nav-link{
      color:#000;
 background-color: #004374;
  border-radius: 0;
    }
    #v-pills-tab .nav-link:hover{
      color:#000;
 background-color: #75D1FF;
  border-radius: 0;
    }
            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header_over">
        <h1 class="display-3 text-uppercase text-white mb-3">NARA Act</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">NARA Act</h6>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- NARA Act Start -->
 
<div class="container mt-5 mb-5">
  <div class="d-flex align-items-start">
    <!-- Left Side Nav -->
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

      <!-- NARA Act -->
      <button class="nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
        NARA Act
      </button>

      <!-- NARA Act Amendment -->
      <button class="nav-link mt-4 text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
        NARA Act Amendment
      </button>

      <!-- NARA Enactment parent -->
      <button class="nav-label mt-4 d-flex justify-content-between align-items-center" 
              data-bs-toggle="collapse" 
              data-bs-target="#naraSubmenu" 
              aria-expanded="false" 
              type="button">
        <span>NARA Enactment</span>
        <i id="naraArrow" class="fa fa-angle-down"></i>
      </button>

      <!-- Sub-menu -->
      <div class="collapse" id="naraSubmenu">
        <a class="nav-link ms-3 mt-2 text-start" id="english-tab" data-bs-toggle="pill" data-bs-target="#english"  role="tab" aria-controls="english" aria-selected="false">
          English
  </a>
        <a class="nav-link ms-3 mt-2 text-start" id="sinhala-tab" data-bs-toggle="pill" data-bs-target="#sinhala"  role="tab" aria-controls="sinhala" aria-selected="false">
          Sinhala
  </a>
        <a class="nav-link ms-3 mt-2 text-start" id="tamil-tab" data-bs-toggle="pill" data-bs-target="#tamil"  role="tab" aria-controls="tamil" aria-selected="false">
          Tamil
  </a>
      </div>
    </div>

    <!-- Right Side Content -->
    <div class="card tab-content flex-grow-1" id="v-pills-tabContent" style="min-height:600px;">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <h4 class="mb-3 text-center mt-4">NARA Act</h4>
        <embed src="doc/Nara-act.pdf" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <h4 class="mb-3 text-center mt-4">NARA Act Amendment</h4>
        <embed src="doc/NARAActAmd.pdf" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="tab-pane fade" id="english" role="tabpanel" aria-labelledby="english-tab">
        <h4 class="mb-3 text-center mt-4">NARA Enactment English</h4>
        <embed src="doc/NARA-Enactment-English.pdf" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="tab-pane fade" id="sinhala" role="tabpanel" aria-labelledby="sinhala-tab">
        <h4 class="mb-3 text-center mt-4">NARA Enactment Sinhala</h4>
        <embed src="doc/NARA-Enactment-Sinhala.pdf" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="tab-pane fade" id="tamil" role="tabpanel" aria-labelledby="tamil-tab">
        <h4 class="mb-3 text-center mt-4">NARA Enactment Tamil</h4>
        <embed src="doc/NARA-Enactment-Tamil.pdf" type="application/pdf" width="100%" height="600px" />
      </div>
    </div>
  </div>
</div>

    <!-- End NARA Act -->


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
document.addEventListener("DOMContentLoaded", function () {
  const arrow = document.getElementById("naraArrow");
  const submenu = document.getElementById("naraSubmenu");
  const mainTabs = ["v-pills-home-tab", "v-pills-profile-tab"];
  const subTabs = ["english-tab", "sinhala-tab", "tamil-tab"];

  // Arrow rotation
  submenu.addEventListener("show.bs.collapse", () => arrow.classList.add("rotate-up"));
  submenu.addEventListener("hide.bs.collapse", () => arrow.classList.remove("rotate-up"));

  // When clicking main tabs, collapse submenu and remove active from sub-tabs
  mainTabs.forEach(tabId => {
    const tab = document.getElementById(tabId);
    tab.addEventListener("shown.bs.tab", () => {
      const collapseInstance = bootstrap.Collapse.getOrCreateInstance(submenu, {toggle: false});
      collapseInstance.hide();
      subTabs.forEach(subId => document.getElementById(subId).classList.remove("active"));
    });
  });

  // Keep submenu open and highlight parent when sub-tab clicked
  subTabs.forEach(tabId => {
    const tab = document.getElementById(tabId);
    tab.addEventListener("shown.bs.tab", () => {
      const collapseInstance = bootstrap.Collapse.getOrCreateInstance(submenu, {toggle: false});
      collapseInstance.show();
      arrow.classList.add("rotate-up");
    });
  });
});
</script>
</body>
</html>