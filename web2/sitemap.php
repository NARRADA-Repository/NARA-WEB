<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Vacancy </title>
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
     

    .tag-new {
      position: absolute;
      top: 10px;
      right: 10px;
      background: red;
      color: white;
      font-size: 0.7rem;
      padding: 4px 8px;
      border-radius: 4px;
      font-weight: bold;
    }

    /* Site Map */
    .sitemap-container {
      max-width: 1100px;
      margin: 50px auto;
      padding: 30px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }
    .sitemap-title {
      text-align: center;
      font-weight: bold;
      font-size: 2rem;
      color: #0077b6;
      margin-bottom: 30px;
    }
    .sitemap-section {
      margin-bottom: 20px;
    }
    .sitemap-section h4 {
      cursor: pointer;
      font-size: 1.2rem;
      font-weight: 600;
      color: #023e8a;
      padding: 10px 15px;
      border-radius: 8px;
      transition: background 0.3s ease;
    }
    .sitemap-section h4:hover {
      background: #caf0f8;
    }
    .sitemap-links {
      list-style: none;
      padding-left: 20px;
      margin: 0;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease, opacity 0.5s ease;
      opacity: 0;
    }
    .sitemap-links.show {
      max-height: 500px;
      opacity: 1;
    }
    .sitemap-links li {
      margin: 8px 0;
    }
    .sitemap-links a {
      text-decoration: none;
      color: #0077b6;
      transition: color 0.3s ease;
    }
    .sitemap-links a:hover {
      color: #0096c7;
    }
    /* Little arrow */
    .sitemap-section h4::after {
      content: '▶';
      float: right;
      transition: transform 0.3s ease;
    }
    .sitemap-section.active h4::after {
      transform: rotate(90deg);
    }


            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Sitemap</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Sitemap</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<!-- Site Map -->
<div class="sitemap-container">
    <h2 class="sitemap-title">🌐 Website Sitemap</h2>

    <!-- Home -->
    <div class="sitemap-section">
      <h4>HOME</h4>
      <ul class="sitemap-links">
        <li><a href="home.php">Homepage</a></li>
      </ul>
    </div>

    <!-- About Us -->
    <div class="sitemap-section">
      <h4>ABOUT US</h4>
      <ul class="sitemap-links">
        <li><a href="overview.php">Overview</a></li>
        <li><a href="key-officials.php">Key Officials</a></li>
        <li><a href="nara-act.php">NARA Act</a></li>
        <li><a href="research-divisions.php">Research Division</a></li>
        <li><a href="regional-research-centers.php">Regional Research Centers</a></li>
        <li><a href="supporting-divisions.php">Supporting Division</a></li>
      </ul>
    </div>

    <!-- Publications -->
    <div class="sitemap-section">
      <h4>PUBLICATIONS</h4>
      <ul class="sitemap-links">
        <li><a href="journal.php">NARA Journal</a></li>
        <li><a href="rti-form.php">RTI Reports/Forms</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="posters.php">Posters</a></li>
      </ul>
    </div>

    <!-- Services -->
    <div class="sitemap-section">
      <h4>SERVICES</h4>
      <ul class="sitemap-links">
        <li><a href="services.php">All Services</a></li>
        <li><a href="http://io.scsio.ac.cn/srilanka">Ocean Forecast</a></li>
        <li><a href="http://sloceanforecasts.org.s3-website-ap-southeast-2.amazonaws.com/index.html">Environment Forecast</a></li>
        <li><a href="#">Tuna Forecast</a></li>
        <li><a href="http://www.nara.ac.lk/?page_id=4018">Sea Level Data</a></li>
        <li><a href="services.php">Other Services</a></li>
      </ul>
    </div>

    <!-- MSDI -->
    <div class="sitemap-section">
      <h4>MSDI</h4>
      <ul class="sitemap-links">
        <li><a href="#">Marine Data</a></li>
        <li><a href="#">GIS Systems</a></li>
        <li><a href="#">Sensors</a></li>
      </ul>
    </div>

    <!-- Annual Research -->
    <div class="sitemap-section">
      <h4>ANNUAL RESEARCH</h4>
      <ul class="sitemap-links">
        <li><a href="#">Projects</a></li>
        <li><a href="#">Field Work</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="sitemap-section">
      <h4>CONTACT US</h4>
      <ul class="sitemap-links">
        <li><a href="#">Inquiry</a></li>
        <li><a href="contact.php">Contact Details</a></li>
      </ul>
    </div>

    <!-- Office Use -->
    <div class="sitemap-section">
      <h4>OFFICE USE</h4>
      <ul class="sitemap-links">
        <li><a href="#">NARA Mail</a></li>
        <li><a href="#">Gate Pass</a></li>
      </ul>
    </div>

  </div>



<!-- End Site Map -->
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
  // Animation toggle
  document.querySelectorAll('.sitemap-section h4').forEach(section => {
    section.addEventListener('click', () => {
      let parent = section.parentElement;
      parent.classList.toggle('active');
      parent.querySelector('.sitemap-links').classList.toggle('show');
    });
  });
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