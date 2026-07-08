<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Contact Us </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
             <link rel="stylesheet" href="css/key-off-card.css">
             <link rel="stylesheet" href="css/div.css">
            <style>
                .container-slide{
  width: 1120px;
  max-width: 100%;
}
.slider-wrapper{
  margin:  0 30px 20px;
  padding: 20px 30px;
  overflow: hidden;
}
.card{
  background: #fff;
  border-radius: 25px;
  box-shadow: 0 0 20px #00000030;
}
.content-img,
.content-box{
  padding: 30px 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.content-img{
  position: relative;
  row-gap: 5px;
}
.overlay{
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #00003C;
  border-radius: 25px 25px 25px 0;
}
.overlay::before{
  content: '';
  position: absolute;
  height: 40px;
  width: 40px;
  background: #00003C;
  left: 0;
  bottom: -40px;
}
.overlay::after{
  content: '';
  position: absolute;
  height: 40px;
  width: 40px;
  background: #ffffff;
  left: 0;
  bottom: -40px;
  border-radius: 25px 0 0 0;
}
.card-img{
  width: 130px;
  height: 130px;
  position: relative;
  border-radius: 50%;
  background: #fff;
  padding: 3px;
}
.card-img .card-image{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #75d1ff;
}
.content-box .username{
  font-size: 20px;
  font-weight: 600;
  color: #09003a;
  padding-bottom: 6px;
  z-index: 1;
}
.content-box .user-profession{
  font-size: 16px;
  font-weight: 500;
  color: #09003a;
}
.social-icon{
  padding: 30px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: row;
  gap: 15px;
}
.social-icon li{
  list-style: none;
}
.social-icon li a{
  font-size: 20px;
  text-decoration: none;
  color: #fff;
  height: 32px;
  width: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #75d1ff;
  border-radius: 50%;
  position: relative;
  overflow: hidden;
  z-index: 1;
}
.social-icon li a::before{
  content: '';
  position: absolute;
  height: 40px;
  width: 0;
  top: 0;
  left: 0;
  background: #001a33;
  transition: 0.5s;
  z-index: -1;
}
.social-icon li a:hover::before{
  width: 100%;
}
.btn{
  cursor: pointer;
  padding: 12px 30px;
  font-size: 16px;
  font-weight: 500;
  border: none;
  background: #75d1ff;
  color: #fff;
  border-radius: 6px;
  z-index: 1;
  position: relative;
  overflow: hidden;
}
.btn::before{
  content: '';
  position: absolute;
  height: 44px;
  width: 0;
  top: 0;
  left: 0;
  background: #001a33;
  transition: 0.5s;
  z-index: -1;
  color: #fff;
}
.btn:hover{
  color: #fff;  
}
.btn:hover::before{
  width: 100%;
}
.slider-wrapper .swiper-pagination-bullet{
  background: #00039d;
  height: 13px;
  width: 13px;
  opacity: 0.5;
}
.slider-wrapper .swiper-pagination-bullet-active{
  opacity: 1;
}
.slider-wrapper .swiper-slide-button{
  color: #00039d;
  margin-top: -40px;
  transition: 0.5s;
}
.slider-wrapper .swiper-slide-button:hover{
  color: #ff008c;
}
/* Responsive Code */
@media screen and (max-width: 768px) {
  .slider-wrapper{
    margin:  0 20px 20px;
    padding: 20px 30px;
  }
}
/* Container */
.hotline {
  padding: 50px 20px;
  background: linear-gradient(135deg, #75B4C7, #15a1b9ff);
  color: #fff;
  text-align: center;
}

.hotline .container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Flex layout */
.hotline-content {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

/* Icon */
.hotline-icon i {
  font-size: 60px;
  background: rgba(255,255,255,0.2);
  padding: 20px;
  border-radius: 50%;
}

/* Text */
.hotline-text h2 {
  font-size: 36px;
  margin: 0 0 10px 0;
}

.hotline-text p {
  font-size: 16px;
  margin: 0 0 10px 0;
}

.hotline-number {
  font-size: 24px;
  font-weight: 700;
  color: #fff;
  text-decoration: none;
  transition: color 0.3s;
}

.hotline-number:hover {
  color: #000;
}

/* Responsive */
@media (max-width: 768px) {
  .hotline-content {
    flex-direction: column;
  }

  .hotline-icon i {
    font-size: 50px;
  }

  .hotline-text h2 {
    font-size: 28px;
  }

  .hotline-number {
    font-size: 20px;
  }
}
/* Icon Animation */
.hotline-icon i {
  font-size: 60px;
  background: rgba(255,255,255,0.2);
  padding: 20px;
  border-radius: 50%;
  animation: pulse 1.5s infinite;
}

/* Pulse keyframes */
@keyframes pulse {
  0% {
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(255,255,255,0.4);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 0 15px 5px rgba(255,255,255,0.4);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(255,255,255,0.4);
  }
}

            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <!--<div class="container-fluid page-header15">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact Us</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Contact Us</h6>
        </div>
    </div>-->
    <!-- Page Header Start -->

         
<section class="hotline">
  <div class="container">
    <div class="hotline-content">
      <div class="hotline-icon">
        <i class='bx bxs-phone-call'></i>
      </div>
      <div class="hotline-text">
        <h2>Hotline</h2>
        <p>Fisheris Information Center</p>
        <a href="tel:+94710101010" class="hotline-number">+94 710101010</a>
      </div>
    </div>
  </div>
</section>

<!-- Swiper Cards -->
<div class="container-slide swiper">
  <div class="slider-wrapper">
    <div class="card-box swiper-wrapper">

      <!-- Card 1 -->
      <div class="card swiper-slide">
        <div class="content-img">
          <span class="overlay"></span>
          <div class="card-img">
            <img src="img/team-1.jpg" alt="User Image" class="card-image">
          </div>
        </div>
        <div class="content-box">
          <h2 class="username">Prof. S. Hettiarachchi</h2>
          <p class="user-profession">Chairman</p>
          <ul class="social-icon">
             <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
          </ul>
          <!-- Button triggers modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal1">
            Contact Details
          </button>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card swiper-slide">
        <div class="content-img">
          <span class="overlay"></span>
          <div class="card-img">
            <img src="img/team-2.jpg" alt="User Image" class="card-image">
          </div>
        </div>
        <div class="content-box">
          <h2 class="username">Dr. K. Arulananthan</h2>
          <p class="user-profession">Director General</p>
          
          <ul class="social-icon">
              <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
          </ul>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal2">
            Contact Details
          </button>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card swiper-slide">
        <div class="content-img">
          <span class="overlay"></span>
          <div class="card-img">
            <img src="img/team-3.jpg" alt="User Image" class="card-image">
          </div>
        </div>
        <div class="content-box">
          <h2 class="username">Dr. K.H.M.L. Amaralal</h2>
          <p class="user-profession">Deputy Director General</p>
          <ul class="social-icon">
             <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
          </ul>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal3">
            Contact Details
          </button>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-slide-button swiper-button-prev"></div>
    <div class="swiper-slide-button swiper-button-next"></div>    
  </div>
</div>

<!-- Modals -->
<!-- Modal 1 -->
<div class="modal fade" id="contactModal1" tabindex="-1" aria-labelledby="contactModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel1">Prof. S. Hettiarachchi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Email: chairman@nara.ac.lk</p>
        <p>Tel:  +94112521881</p>
         <p>Mobile: </p>
          <p>FAX: +94112521881</p>
      
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="contactModal2" tabindex="-1" aria-labelledby="contactModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel2">Dr. K. Arulananthan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Email: dg@nara.ac.lk/ k.arulan@gmail.com</p>
       <p>Tel: +94112521932</p>
         <p>Mobile: +9471935362</p>
          <p>FAX: +94112521932</p>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="contactModal3" tabindex="-1" aria-labelledby="contactModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel3">Dr. K.H.M.L. Amaralal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Email: lalith@nara.ac.lk/l_amaralal@hotmail.com</p>
       <p>Tel: +94112529754</p>
         <p>Mobile: +94719353275</p>
          <p>FAX: </p>
       
      </div>
    </div>
  </div>
</div>


<!-- New HOD Section -->


<div class="container profile-page mb-5">
  <h2 class="section-title mt-2 mb-5 text-center text-dark">
   
    Heads of Divisions
  </h2>

    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-4.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Dr</strong>.K.A.W.S.Weerasekara</h4>
                            <span class="job_post">Head / Environmental Studies Division</span>
                            <p></p>
                            <span class="job_post">Email :  shyamalikaww@nara.ac.lk </span><br>
                            <span class="job_post">Tel : : +94-11-2521009</span><br><br>
                            <div>
                                  <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-5.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Dr</strong>.W.N.C. Priyadarshani</h4>
                            <span class="job_post">	Head (Actg.)/ Fishing Technology Division</span>
                            <p></p>
                              <span class="job_post">Email : nilanthi_priyadarshani@yahoo.com</span><br>
                            <span class="job_post">Tel : +94-11-2529737</span><br><br>
                            <div>
                            <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                           
</div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-6.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Mr</strong>.S.R.C.Ranaweera</h4>
                            <span class="job_post">Chief Hydrographer/ Hydrographic Division	</span>
                            <p></p>
                              <span class="job_post">Email : roshanccom@gmail.com</span><br>
                            <span class="job_post">Tel : : +94-11-2521705</span><br><br>
                            <div>
                             <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                                                 </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-7.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Dr</strong>. P.P.M Heenatigala</h4>
                            <span class="job_post">Head / IAR & A Division</span>
                            <p></p>
                              <span class="job_post">Email : prajani@nara.ac.lk </span><br>
                            <span class="job_post">Tel : +94-11-2521005</span><br><br>
                            <div>
                                <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>

        <!-- block -->
 <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-8.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Dr</strong>. R. P. P. K.Jayasinghe</h4>
                            <span class="job_post">Head/ Marine Biological Resources Division</span>
                            <p></p>
                              <span class="job_post">Email : prabath_jayasinghe@yahoo.com </span><br>
                            <span class="job_post">Tel : +94-11-2521914</span><br><br>
                            <div>
                                <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
<!-- End block -->

  <!-- block -->
 <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-9.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Mr</strong>. P.A.D. Ajith Kumara</h4>
                            <span class="job_post">Director / Monitoring and Evaluation</span>
                            <p></p>
                              <span class="job_post">Email : ajithkumaranara@gmail.com </span><br>
                            <span class="job_post">Tel : +94-11-2529581</span><br><br>
                            <div>
                                <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
<!-- End block -->
  <!-- block -->
 <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/user.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Mr</strong>.R.M.R.M. Jayathilaka</h4>
                            <span class="job_post">Head (Actg.) / Oceanography Division</span>
                            <p></p>
                              <span class="job_post">Email : ruchira.jayathilaka@gmail.com </span><br>
                            <span class="job_post">Tel : +94-11-2521008</span><br><br>
                            <div>
                                <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
<!-- End block -->
  <!-- block -->
 <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/user2.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Ms</strong>.D.W.L.U.De.Silva</h4>
                            <span class="job_post">Head/ Socio Ecomomics & Marketing Research Division</span>
                            <p></p>
                              <span class="job_post">Email : lasamiupsala@gmail.com </span><br>
                            <span class="job_post">Tel : +94-11-2529718</span><br><br>
                            <div>
                                <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
<!-- End block -->
  <!-- block -->
 <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-10.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Mr</strong>. R.D.P.P.Ranasinghe</h4>
                            <span class="job_post">Director /Administration & HR Management</span>
                            <p></p>
                              <span class="job_post">Email : directoradmin@nara.ac.lk, </span><br>
                            <span class="job_post">Tel : +94-11-2524430</span><br><br>
                            <div>
                                <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
<!-- End block -->
  <!-- block -->
 <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="pcard profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="img/team-11.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Mr</strong>. N.S.Hewagama</h4>
                            <span class="job_post">Director / Finance Division</span>
                            <p></p>
                              <span class="job_post">Email : directorfinance@nara.ac.lk </span><br>
                            <span class="job_post">Tel : +94-11-2521383</span><br><br>
                            <div>
                                <!-- Call link button -->
  <a href="tel:+94112223344" class="btn btn-call btn-round"><i class="fa fa-phone"></i> Call</a>

  <!-- Email link button -->
  <a href="mailto:info@example.com" class="btn btn-email btn-round"><i class="fa fa-envelope"></i> Email</a>
                          
                            </div>
                           
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
<!-- End block -->









	</div>
</div>






<!-- New HOD Section -->



<!-- HOD -->
 <!--
 <div class="container mb-5">
        <div class="row">
            <div  style="text-align: center;">
							<h2 style="margin-top: 25px !important;">Heads of Divisions</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/hd1.jpg">
                    </div>
                    <h5 class="title">Dr. K.A.W.S.Weerasekara</h5>
                    <span class="post">Head / Environmental Studies Division</span>
                    <ul class="social">
                         <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
     
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/hd2.jpg">
                    </div>
                    <h5 class="title">Dr. W.N.C. Priyadarshani</h5>
                    <span class="post">Head (Actg.)/ Fishing Technology Division</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/hd3.jpg">
                    </div>
                    <h5 class="title">Mr. S.R.C.Ranaweera</h5>
                    <span class="post">Chief Hydrographer/ Hydrographic Division</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/hd4.jpg">
                    </div>
                    <h5 class="title">Dr. P.P.M Heenatigala</h5>
                    <span class="post">Head / Inland Aquatic Resources and Aquaculture Division</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
            

        </div>
-->
<!-- Second Row -->
 <!--
  <div class="row mt-4">
          
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/hd5.jpg">
                    </div>
                    <h5 class="title">Dr. R. P. P.K Jayasinghe</h5>
                    <span class="post">Head/ Marine Biological Resources Division</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
     
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/hd6.jpg">
                    </div>
                    <h5 class="title">Mr. P.A.D. Ajith Kumara</h5>
                    <span class="post">Director / Monitoring and Evaluation</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod3.jpg">
                    </div>
                    <h5 class="title">Mr.R.M.R.M. Jayathilaka</h5>
                    <span class="post">Head (Actg.) / Oceanography Division</span>
                    <ul class="social">
                         <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="image4.jpg">
                    </div>
                    <h5 class="title">Ms.D.W.L.U.De.Silva</h5>
                    <span class="post">Head / Inland Aquatic Resources and Aquaculture Division</span>
                    <ul class="social">
                         <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
            
        </div>

-->

<!-- Second Row -->
 <!--
  <div class="row mt-4">
          
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/dr1.jpg">
                    </div>
                    <h5 class="title">Ms R.D.P.P.Ranasinghe</h5>
                    <span class="post">Head/ Marine Biological Resources Division</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
     
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/dr2.jpg">
                    </div>
                    <h5 class="title">Mr. P.A.D. Ajith Kumara</h5>
                    <span class="post">Director / Monitoring and Evaluation</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod3.jpg">
                    </div>
                    <h5 class="title">Mr.R.M.R.M. Jayathilaka</h5>
                    <span class="post">Head (Actg.) / Oceanography Division</span>
                    <ul class="social">
                         <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="image4.jpg">
                    </div>
                    <h5 class="title">Ms.D.W.L.U.De.Silva</h5>
                    <span class="post">Head / Inland Aquatic Resources and Aquaculture Division</span>
                    <ul class="social">
                         <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
            
        </div>

-->
  
<!-- Third Row Director -->
 <!--
  <div class="row mt-4">
          
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/dr1.jpg">
                    </div>
                    <h5 class="title">Ms R.D.P.P.Ranasinghe</h5>
                    <span class="post">Director/ Adminisration & HRM</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
     
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/dr2.jpg">
                    </div>
                    <h5 class="title">Mr.N.S.Hewagama</h5>
                    <span class="post">Director / Finance</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/dr3.jpg">
                    </div>
                    <h5 class="title">Mr.S.K.S.Liyanarachchi</h5>
                    <span class="post">Director/Service & Operation</span>
                    <ul class="social">
                         <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/dr4.jpg">
                    </div>
                    <h5 class="title">Mr.K.T.M.K.P.Thilakarathna</h5>
                    <span class="post">Assistant Director/ Information Technology</span>
                    <ul class="social">
                         <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
-->
  
<!-- 4th Row Director -->
<!--
  <div class="row mt-4">
          
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/mb1.jpg">
                    </div>
                    <h5 class="title">Mr.K.A.D.A.D.Gunarathna</h5>
                    <span class="post">Librarian(Actg)</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
     
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/hod/mb2.jpg">
                    </div>
                    <h5 class="title">Ms.M.Udayangani</h5>
                    <span class="post">Secretary to the Governing Board and Legal Officer</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-phone"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                        <li><a href="#" class="fa-brands fa-x-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
           

            
            
        </div>


      


</div>

-->
 <!-- HOD End -->

      
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
    const swiper = new Swiper('.slider-wrapper', {
  loop: true,
  grabCursor: true,
  spaceBetween: 50,
  centerSlider: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // Let's Make it Autoplay
  autoplay:{
    delay: 3000,
    disableOnInteraction: false
  },
  // Responsive
  breakpoints: {
    0:{
      slidesPerView: 1
    },
    768:{
      slidesPerView: 2
    },
    1024:{
      slidesPerView: 3
    }
  }
  
});
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