<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - STAFF MEMBERS</title>
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
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
<link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/carasole.css">
             <link rel="stylesheet" href="css/mega.css">
<style>
.card{
height:240px;
border:none;
}

.box-item {
      position: relative;
      width: 100%;
      margin-bottom: 230px;
      perspective: 1000px; /* creates 3D perspective */
    }

    .flip-box {
      position: relative;
      width: 100%;
      height: 100%;
      transform-style: preserve-3d; /* allow child faces to exist in 3D */
      transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
    }

    /* Front + Back common */
    .flip-box-front,
    .flip-box-back {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      min-height: 200px;
      border-radius: 8px;
      background-size: cover;
      background-position: center;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden; /* Safari */
    }

    .flip-box-front {
      transform: rotateY(0deg);
      z-index: 2;
    }

    .flip-box-back {
      transform: rotateY(180deg);
    }

    /* Flip on hover */
    .box-item:hover .flip-box {
      transform: rotateY(180deg);
    }

    .inner {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      padding: 40px 20px;
      transform: translateY(-50%);
      text-align: center;
      color: #fff;
    }

    .flip-box-header {
      font-size: 28px;
      font-weight: bold;
    }

    .flip-box p {
      font-size: 16px;
      line-height: 1.5em;
    }

    .flip-box-img {
      margin-top: 20px;
      
    }

    .flip-box-button {
      background-color: transparent;
      border: 2px solid #fff;
      border-radius: 2px;
      color: #fff !important;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      margin-top: 20px;
      padding: 10px 15px;
      text-transform: uppercase;
    }

  .team-section {
      padding: 60px 0;
    }

    .member-card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      transition: all 0.3s ease;
      background-color: #000;
      color: #fff;
    }

    .member-card img {
      width: 100%;
      height: 350px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .member-card:hover img {
      transform: scale(1.05);
      opacity: 0.9;
    }

    .member-info {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0, 0, 50, 0.9), rgba(0, 0, 0, 0.1));
      padding: 20px;
    }

    .member-info h5 {
      margin: 0;
      font-weight: 600;
      font-size: 1.1rem;
    }

    .member-info p {
      margin: 3px 0;
      font-size: 0.9rem;
    }

    .member-info small {
      color: #d1d1d1;
      font-size: 0.85rem;
    }


</style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header16">
        <h1 class="display-3 text-uppercase text-white mb-3">STAFF MEMBERS</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">STAFF MEMBERS</h6>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Card --> 


<section class="team-section container">
  <div class="row g-4">
    <!-- Member 1 -->
    <div class="col-md-4 col-lg-3">
      <div class="member-card">
        <img src="img/user.png" alt="Member 1">
        <div class="member-info">
          <h5>Dinushi Chathurangi</h5>
          <p>Research Assistant</p>
          <small>Natural Products</small>
        </div>
      </div>
    </div>

    <!-- Member 2 -->
    <div class="col-md-4 col-lg-3">
      <div class="member-card">
        <img src="img/user.png" alt="Member 2">
        <div class="member-info">
          <h5>Milanga Dahanayake</h5>
          <p>Driver</p>
          <small>Administration Division</small>
        </div>
      </div>
    </div>

    <!-- Member 3 -->
    <div class="col-md-4 col-lg-3">
      <div class="member-card">
        <img src="img/user.png" alt="Member 3">
        <div class="member-info">
          <h5>Prof. Sabrina Dallavalle</h5>
          <p>Adjunct Professor</p>
          <small>Natural Products</small>
        </div>
      </div>
    </div>

    <!-- Member 4 -->
    <div class="col-md-4 col-lg-3">
      <div class="member-card">
        <img src="img/user.png" alt="Member 4">
        <div class="member-info">
          <h5>Naruwan Dayananda</h5>
          <p>Research Assistant</p>
          <small>Evolution, Ecology and Biodiversity</small>
        </div>
      </div>
    </div>

    <!-- Member 5 -->
    <div class="col-md-4 col-lg-3">
      <div class="member-card">
        <img src="img/user.png" alt="Member 5">
        <div class="member-info">
          <h5>Samangi De Silva</h5>
          <p>Research Assistant</p>
          <small>Molecular Microbiology and Human Diseases</small>
        </div>
      </div>
    </div>

    <!-- Add more members as needed -->
  </div>
</section>










    

<?php
    require('footer.php');
?>
 <!-- Linking Swiper script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/carasole.js"></script>
   <script src="js/script.js"></script>
     <script src="js/chat.js"></script>
    <script>
  AOS.init();
</script>
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

</body>
</html>