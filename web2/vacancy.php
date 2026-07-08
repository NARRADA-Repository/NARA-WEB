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

            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Vacancy</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Vacancy</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<!-- Vacancies -->
<section>
  <div class="container mt-4 mb-5">
    <!-- Use justify-content-center to center cards -->
    <div class="row justify-content-center">
    
      <section>
  <div class="container mt-4 mb-5">
    <div class="row justify-content-center">

      <?php
      include 'db.php'; // <-- your database connection file

      // Get all vacancies in descending order
      $sql = "SELECT * FROM vacancies ORDER BY id DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $job_title   = htmlspecialchars($row['job_title']);
              $publish_date = date("d/m/Y", strtotime($row['publish_date']));
              $closing_date = date("d/m/Y", strtotime($row['closing_date']));
              $image        = !empty($row['image']) ? "".$row['image'] : "uploads/default.jpg";
              $pdf          = !empty($row['pdf']) ? "".$row['pdf'] : "#";

              echo '
              <div class="card p-3 m-2 position-relative" style="width: 18rem;">
                <span class="tag-new">NEW</span>
                <img src="'.$image.'" class="card-img-top" alt="'.$job_title.'">
                <div class="card-body">
                  <h6>'.$job_title.'</h6>
                  <p class="card-text">Post Date: '.$publish_date.'</p>
                  <p class="card-text">Closing Date: '.$closing_date.'</p>
                  <a href="'.$pdf.'" target="_blank" class="btn btn-primary">Download</a>
                </div>
              </div>';
          }
      } else {
          echo "<p class='text-center'>No vacancies available.</p>";
      }
      ?>

    </div>
  </div>
</section>

     

    </div>
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

</body>
</html>