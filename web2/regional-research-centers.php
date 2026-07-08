<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Regional Research Center </title>
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



</style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header3">
        <h1 class="display-3 text-uppercase text-white mb-3 glow-text">Regional Research Center</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Regional Research Center</h6>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Card --> 

 <!-- Service Division -->


<div class="container py-5">

    <div class="row">

      <!-- Card 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front" style=" background: 
    linear-gradient(rgba(65, 148, 163, 0.8), rgba(49, 141, 177, 0.8)), 
    url('img/rgc.png') center/cover no-repeat;">
              <div class="inner">
                <h3 class="flip-box-header">Kadolkale</h3>
                <p>Regional Research Center </p>
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url('img/rgc.png');">
              <div class="inner">
                <h3 class="flip-box-header">Kadolkale</h3>
                <p>Regional Research Center</p>
               <a href="div-esd.php" style="text-decoration: none;" class="flip-box-button">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front" style=" background: 
    linear-gradient(rgba(65, 148, 163, 0.8), rgba(49, 141, 177, 0.8)), 
    url('img/rgc.png') center/cover no-repeat;">
              <div class="inner">
                <h3 class="flip-box-header">Kalpitiya</h3>
                <p>Regional Research Center</p>
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url('img/rgc.png');">
              <div class="inner">
                <h3 class="flip-box-header">FTD</h3>
                <p>Regional Research Center</p>
                <a href="div-ftd.php" style="text-decoration: none;" class="flip-box-button">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front" style=" background: 
    linear-gradient(rgba(65, 148, 163, 0.8), rgba(49, 141, 177, 0.8)), 
    url('img/rgc.png') center/cover no-repeat;">
              <div class="inner">
                <h3 class="flip-box-header">Kapparatota</h3>
                <p>Regional Research Center</p>
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url('img/rgc.png');">
              <div class="inner">
                <h3 class="flip-box-header">Kapparatota</h3>
                <p>Regional Research Center</p>
                <a href="div-iarad.php" style="text-decoration: none;" class="flip-box-button">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

<!--Section 2-->
 <div class="row">

      <!-- Card 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front" style=" background: 
    linear-gradient(rgba(65, 148, 163, 0.8), rgba(49, 141, 177, 0.8)), 
    url('img/rgc.png') center/cover no-repeat;">
              <div class="inner">
                <h3 class="flip-box-header">Panapitiya</h3>
                <p>Regional Research Center</p>
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url('img/rgc.png');">
              
              <div class="inner">
                <h3 class="flip-box-header">Rekawa</h3>
                <p>Regional Research Center</p>
               <a href="div-phtd.php" style="text-decoration: none;" class="flip-box-button">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front" style=" background: 
    linear-gradient(rgba(65, 148, 163, 0.8), rgba(49, 141, 177, 0.8)), 
    url('img/rgc.png') center/cover no-repeat;">
              <div class="inner">
                <h3 class="flip-box-header">Rekawa</h3>
                <p>Regional Research Center</p>
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url('img/rgc.png');">
              <div class="inner">
                <h3 class="flip-box-header">Rekawa</h3>
                <p>Regional Research Center</p>
                <a href="div-mbrd.php" style="text-decoration: none;" class="flip-box-button">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
     
    </div>

  




    



  </div>





<!--<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center"></h2>
        
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="container-fluid">
          <div class="row gy-3 gy-md-4">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-front text-primary mb-4" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                  </svg>
                  <h5 class="mb-4">Regional Research Center Kadolkale</h5>
                  <p class="mb-4 text-secondary"></p>
                  <a href="esd.php" class="btn btn-outline-primary bsb-btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-front text-primary mb-4" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                  </svg>
                  <h5 class="mb-4">Regional Research Center Kalpitiya</h5>
                  <p class="mb-4 text-secondary"></p>
                  <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                   <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-front text-primary mb-4" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                  </svg>
                  <h5 class="mb-4">Regional Research Center Kapparathota</h5>
                  <p class="mb-4 text-secondary"></p>
                  <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-front text-primary mb-4" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                  </svg>
                  <h5 class="mb-4">Regional Research Center Pannipitiya</h5>
                  <p class="mb-4 text-secondary"></p>
                  <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                   <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-front text-primary mb-4" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                  </svg>
                  <h5 class="mb-4">Regional Research Center Rekawa</h5>
                  <p class="mb-4 text-secondary"></p>
                  <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          

            
            
           

             




          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->

    <!-- End Page Card -->
    

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