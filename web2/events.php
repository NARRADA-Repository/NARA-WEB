
<?php
include "db.php"; // make sure this connects to your database

// Fetch news from database, latest first
$sql = "SELECT * FROM news ORDER BY publish_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Events </title>
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
            
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Events</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Events</h6>
        </div>
    </div>
    <!-- Page Header Start -->
      <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4"></h1>
        </div>
       
<div class="row g-5">
    <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-lg-4 col-md-4 card">
            <div class="bg-light">
                <?php if($row['image'] && file_exists($row['image'])): ?>
                    <img class="img-fluid pt-4" src="<?php echo $row['image']; ?>" alt="">
                <?php else: ?>
                    <img class="img-fluid pt-4" src="img/default.png" alt="">
                <?php endif; ?>
                <div class="p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <span>Category: <?php echo $row['category']; ?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ms-3">
                                <i class="far fa-calendar-alt text-primary me-2"></i>
                                <?php echo date("d M, Y", strtotime($row['publish_date'])); ?>
                            </span>
                        </div>
                    </div>
                    <h5 class="text-uppercase mb-3"><?php echo $row['title']; ?></h5>
                    <button 
                        class="btn btn-primary read-more-btn" 
                        data-bs-toggle="modal" 
                        data-bs-target="#newsModal" 
                        data-id="<?php echo $row['id']; ?>">
                        Read More <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php else: ?>
    <p class="text-center">No news available at the moment.</p>
<?php endif; ?>




        </div>
    </div>
    <!-- Blog End -->

<!-- News Model -->
<!-- News Modal -->
<!-- News Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true"  style="z-index:1000000 !important;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newsModalLabel">News Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="newsModalContent">
        <!-- Content will be loaded here via AJAX -->
        <div class="text-center">Loading...</div>
      </div>
    </div>
  </div>
</div>


<!-- End News Model -->





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
$(document).ready(function(){
    $('.read-more-btn').click(function(){
        var newsId = $(this).data('id');
        $('#newsModalContent').html('<div class="text-center">Loading...</div>');

        $.ajax({
            url: 'news_detail_ajax.php',
            type: 'GET',
            data: {id: newsId},
            success: function(data){
                $('#newsModalContent').html(data);
            },
            error: function(){
                $('#newsModalContent').html('<div class="alert alert-danger">Failed to load content.</div>');
            }
        });
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