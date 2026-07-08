<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Fishing Technology Division </title>
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


/* Target only your vertical nav */
#v-pills-tab .nav-link {
  background-color: transparent;
  color: #000;
  margin: 0;             /* remove outer spacing */
  border-radius: 0;      /* remove rounded corners */
  padding: 8px 12px;     /* adjust padding if you want them tighter */
}

/* Active state */
#v-pills-tab .nav-link.active,
#v-pills-tab .nav-link:active,
#v-pills-tab .nav-link:focus,
#v-pills-tab .nav-link.show,
#v-pills-tab .show > .nav-link {
  background-color: #75D1FF !important;
  color: #fff !important;
  border-radius: 0;      /* ensure active stays square */
}

/* optional: remove default gap between stacked nav items */
#v-pills-tab .nav-link + .nav-link {
  margin-top: 0;
}

/* Team Card */

 .team-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 1rem;
  overflow: hidden;
  position: relative;
}

.team-card:hover {
  transform: translateY(-6px) scale(1.03);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.img-wrapper {
  overflow: hidden;
}

.img-wrapper img {
  transition: transform 0.5s ease;
}

.team-card:hover .img-wrapper img {
  transform: scale(1.1);
}

/* Highlighted HOD */
.hod-card {
  border: 3px solid #ff5722; /* orange border */
}

.hod-badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background: #ff5722;
  color: #fff;
  font-size: 0.75rem;
  font-weight: 600;
  padding: 5px 8px;
  border-radius: 5px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/*Research Card */
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
    height: 250px;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
     height: 250px;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
     height: 250px;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
     height: 250px;
}


 #v-pills-tab .nav-link{
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
    <div class="container-fluid page-header6">
        <h1 class="display-3 text-uppercase text-white mb-3">Fishing Technology Division</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Fishing Technology Division</h6>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- NARA Division Start -->
 
<div class="container mt-5 mb-5">
  <div class="d-flex align-items-start">
    <!-- Left Side Nav -->
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

      <!-- About -->
      <button class="nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
        About
      </button>

      <!-- Staff -->
      <button class="nav-link mt-4 text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
        Staff
      </button>
       <!-- Research -->
      <button class="nav-link mt-4 text-start" id="v-pills-research-tab" data-bs-toggle="pill" data-bs-target="#v-pills-research" type="button" role="tab" aria-controls="v-pills-research" aria-selected="false">
        Research
      </button>
  
    </div>

    <!-- Right Side Content -->
    <div class="card tab-content flex-grow-1" id="v-pills-tabContent" style="min-height:600px;">
    
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <h4 class="mb-3 text-center mt-4"></h4>
       <p class="px-3">This division makes valuable contributions to the development of the Fishing Industry by undertaking research and development activities in fishing gear technology.

Recent activities of the Division include the successful demonstration of the inshore Fish Aggregation Devices (FADs) aimed at increasing fish catches and income of small-scale fishermen.

An important current activity involves the deployment of CASITAs to enhance the already degrading habitats of Spiny Lobsters.

Success of this activity will make a significant contribution to sustained Lobster fishery and increased foreign exchange earnings to the country.</p>
    
      </div>

      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
         <h4 class="mb-3 text-center mt-4">Staff Members</h4>
           <!-- Staff -->
<div class="container">
  <div class="row">
    <!-- HOD Card -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow team-card hod-card">
        <span class="hod-badge">HOD</span>
        <div class="img-wrapper">
          <img src="img/user.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h6 class=" mb-0">Dr.K.A.W.S.Weerasekara</h6>
          <div class="card-text text-black-50">Principal Scientist</div>
          <button class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#hodModal">
            View Profile
          </button>
        </div>
      </div>
    </div>

    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow team-card">
        <div class="img-wrapper">
          <img src="img/user.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h6 class=" mb-0">Dr.N.D.Hettige</h6>
          <div class="card-text text-black-50">Senior Scientist</div>
          <button class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#member2Modal">
            View Profile
          </button>
        </div>
      </div>
    </div>

    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow team-card">
        <div class="img-wrapper">
          <img src="img/user.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h6 class="mb-0">Ms.S.R.Chandima</h6>
          <div class="card-text text-black-50">Scientist</div>
          <button class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#member3Modal">
            View Profile
          </button>
        </div>
      </div>
    </div>

    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow team-card">
        <div class="img-wrapper">
          <img src="img/user.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h6 class=" mb-0">Ms.J.K.P.C.Jayawardhane</h6>
          <div class="card-text text-black-50">Scientist</div>
          <button class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#member4Modal">
            View Profile
          </button>
        </div>
      </div>
    </div>
  <!-- Team Member 5 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow team-card">
        <div class="img-wrapper">
          <img src="img/user.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h6 class=" mb-0">Ms.S Thirukeswaram</h6>
          <div class="card-text text-black-50">Scientist</div>
          <button class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#member5Modal">
            View Profile
          </button>
        </div>
      </div>
    </div>





  </div>
</div>



    <!-- End Staff -->

      <!-- End Team -->
      </div>

      <div class="tab-pane fade" id="v-pills-research" role="tabpanel" aria-labelledby="v-pills-research-tab">
        <h4 class="mb-3 text-center mt-4">Research</h4>
       <!-- Research -->

  <div class="container">
    <div class="row ">
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="bi bi-book fs-1 mb-2"></i>
</div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Project  5.1</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-12">
                            <p class="d-flex align-items-center mb-0">
                            Development of Coastal Water Quality Index (WQI) for Southern Beaches: A road to the Blue Flag Certification
</p>
                        </div>
                     
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="bi bi-book fs-1 mb-2"></i>
</div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Project 5.2</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                         <div class="col-12">
                            <p class="d-flex align-items-center mb-0">
                        Investigation of causes for emergency incidents such as Oil Spills, algal blooms and fish kills (Emergency studies)
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="bi bi-book fs-1 mb-2"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Project : 12</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                         <div class="col-12">
                            <p class="d-flex align-items-center mb-0">
                           X-Press Pearl Environment Monitoring
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="bi bi-book fs-1 mb-2"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Project </h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                         <div class="col-12">
                            <p class="d-flex align-items-center mb-0">
                            Development of Coastal Water Quality Index (WQI) for Southern Beaches: A road to the Blue Flag Certification
</p>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
       <!--End Research --> 
      
      </div>

      

    </div>
  </div>
</div>

    <!-- End NARA Division -->


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