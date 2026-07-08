<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - See Level Data </title>
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
/* custom button */
    .custom-btn {
      background-color: #004374;
      color: white;
      border-radius: 50px; /* rounded border */
      border: 2px solid #004374;
      transition: all 0.3s ease;
      text-decoration: none; /* remove underline */
      padding: 8px 20px; /* spacing like button */
      display: inline-block;
    }
    .custom-btn:hover {
      background-color: #75D1FF;
      color: #004374;
      border-color: #75D1FF;
    }
            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header5">
        <h1 class="display-3 text-uppercase text-white mb-3">Environmental Studies Division</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Environmental Studies Division</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<!-- Content Start -->
 <div class="container">
<ul class="nav nav-pills mb-5 mt-5" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link  active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ABOUT</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">STAFF</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">RESEARCH</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >SERVICES</button>
  </li>
</ul>
<div class="tab-content card p-5" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    Environmental Studies Division (ESD) is committed to conduct research with respect to inland, coastal
     and marine environment. Studies conducted by the division involve, assessment of water pollution status 
     of inland and coastal water and identification of relevant polluting sources, pollution impacts on aquatic
      fauna and flora, bioaccumulation of harmful chemical substances (heavy metals, agrochemicals etc.), fishery 
      harbour pollution, current environmental status of lagoons and estuaries etc. ESD comprises of a water and waste water testing laboratory that is capable of providing reliable and cost-effective testing services of physicochemical analysis of water
       and waste water to State or Private institutes and individual customers. These water quality testing
        reports facilitates the Environmental Protection Licensing (EPL) procedure of Central Environment Authority.
      <p>This division involves in conducting and reporting Environmental Impact Assessment (EIA) and Initial Environment Examination (IEE) studies of leading development projects. Moreover, ESD provides advisory services to Environmental Management Committees related to problems in aquatic environment and a stakeholder party to Technical Evaluation Committees of EIAs of development projects with a national importance. Emergency Incidents occur in aquatic environments such as fish kills, oil spills, algal blooms are studied and provide reports with recommendations to alleviate the situation, to relevant authorities for further actions.</p>
      </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
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



  
</div>

  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
  
  
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
    
    </div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
   
      
      </div>
</div>

</div>

<!-- End Content -->





<!-- Model Start -->
 <!-- HOD Modal -->
<div class="modal fade" id="hodModal" tabindex="-1" aria-labelledby="hodModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hodModalLabel">Dr.K.A.W.Shyamali Weerasekara - HOD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
     
        <p><strong>Designation:</strong> Principal Scientist</p>
        <p><strong>Contact:</strong> --</p>
        <p><strong>Email Office:</strong> shyamalikaws@gmail.com</p>
     
        <p><strong>Academic Qualification:</strong> PhD in Computer Science</p>
        <p><strong>Research Details:</strong> AI, NLP, Machine Learning</p>
      </div>
    </div>
  </div>
</div>

<!-- Member 2 Modal -->
<div class="modal fade" id="member2Modal" tabindex="-1" aria-labelledby="member2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="member2ModalLabel">Jane Doe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
       
        <p><strong>Contact:</strong> +94 71 234 5678</p>
        <p><strong>Email:</strong> jane.doe@example.com</p>
        <p><strong>Academic Qualification:</strong> B.Sc. in Computer Science</p>
        <p><strong>Research Details:</strong> Frontend development, ReactJS</p>
      </div>
    </div>
  </div>
</div>

<!-- Member 3 Modal -->
<div class="modal fade" id="member3Modal" tabindex="-1" aria-labelledby="member3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="member3ModalLabel">Michael Lee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
      
        <p><strong>Contact:</strong> +94 71 345 6789</p>
        <p><strong>Email:</strong> michael.lee@example.com</p>
        <p><strong>Academic Qualification:</strong> B.Des in Graphic Design</p>
        <p><strong>Research Details:</strong> UI/UX, Design Systems</p>
      </div>
    </div>
  </div>
</div>

<!-- Member 4 Modal -->
<div class="modal fade" id="member4Modal" tabindex="-1" aria-labelledby="member4ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="member4ModalLabel">Sarah Johnson</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
       
        <p><strong>Contact:</strong> +94 71 456 7890</p>
        <p><strong>Email:</strong> sarah.johnson@example.com</p>
        <p><strong>Academic Qualification:</strong> M.Sc in Software Engineering</p>
        <p><strong>Research Details:</strong> Cloud Computing, DevOps</p>
      </div>
    </div>
  </div>
</div>

<!-- Member 5 Modal -->
<div class="modal fade" id="member5Modal" tabindex="-1" aria-labelledby="member5ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="member5ModalLabel">Sarah Johnson</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
       
        <p><strong>Contact:</strong> +94 71 456 7890</p>
        <p><strong>Email:</strong> sarah.johnson@example.com</p>
        <p><strong>Academic Qualification:</strong> M.Sc in Software Engineering</p>
        <p><strong>Research Details:</strong> Cloud Computing, DevOps</p>
      </div>
    </div>
  </div>
</div>

<!-- End Model -->

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