<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>National Aquatic Resources Research and Development Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
  
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
/* news later  */
     .section-header {
  margin-bottom: 60px;
  position: relative;
  padding-bottom: 20px;
}

.section-header::before {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 5px;
  background: #f82249;
  bottom: 0;
  left: calc(50% - 25px);
}

.section-header h2 {
  font-size: 36px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  margin-bottom: 10px;
}

.section-header p {
  text-align: center;
  padding: 0;
  margin: 0;
  font-size: 18px;
  font-weight: 500;
  color: #9195a2;
}
.subscribe {
  padding: 10vh 0;
  background:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(img/nl.JPG) center center
    no-repeat;
  background-size: cover;
  overflow: hidden;
  position: relative;
  min-height: 30vh;
}

.subscribe:before {
  content: "";
  background: rgba(6, 12, 34, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
    z-index: -1; /* Push overlay behind content */
}

.subscribe .section-header h2,
.subscribe p {
  color: #fff;
}
.subscribe input {
  background: #fff;
  color: #060c22;
  border: 0;
  outline: none;
  padding: 9px 20px;
  border-radius: 50px;
  font-size: 14px;
  flex: 1; /* Allow input to take available space */
  min-width: 200px;
}

.subscribe button {
  border: 0;
  padding: 9px 25px;
  cursor: pointer;
  background: #f82249;
  color: #fff;
  transition: all 0.3s ease;
  outline: none;
  font-size: 14px;
  border-radius: 50px;
  white-space: nowrap; /* Prevent wrapping */
}

.subscribe button:hover {
  background: #e0072f;
}

@media only screen and (min-width: 768px) {
  .subscribe input {
    min-width: 200px;
  }
}

/* Direct acc*/
  .direct-access {
      background: #2e79ba; /* Dark blue */
      display: flex;
      align-items: center;
      padding: 0 0px;
      padding-right: 5px;
	  width:100%;
	  justify-content:center;
  
  
    }

    .direct-access .title {
      background: #2c5a85;
      color: #fff;
      font-weight: bold;
      padding: 6px 14px;
      border-radius: 6px 6px 0 0;
      margin-right: 25px;
      font-size: 14px;
    }

    .direct-access .nav-links {
      display: flex;
      align-items: stretch;
    }

    .direct-access .nav-item {
      text-align: center;
      color: #fff;
      font-size: 14px;
      text-decoration: none;
      padding: 15px 25px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transition: background 0.3s;
    }

    .direct-access .nav-item i {
      font-size: 24px;
      margin-bottom: 5px;
    }

    .direct-access .nav-item:hover {
      background: #0061a8;
    }

    .direct-access .nav-item.active {
      background: #00AEEF;
    }

    .direct-access .search-box {
      margin-left: auto;
      display: flex;
      align-items: center;
      background: #f3f3f5;
      padding: 10px 15px;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .direct-access .search-box input {
      border: none;
      outline: none;
      background: transparent;
      font-size: 14px;
    }

    .direct-access .search-box i {
      margin-left: 10px;
      font-size: 16px;
      color: #000;
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
    .img-fluid {
max-width:95%;
display:flex;
margin-left:auto;
margin-right:auto;
    }
          </style>
</head>
<body>

<?php
    require('navi.php');
?>

<?php
    require('carasole.php');
?>

<!-- Card start -->
 <!--<section id="wrapper1">
    <div class="container-fostrap">
        <div>
            
            <h1 class="heading">
                
            </h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                 
                <div class="col-xs-12 col-sm-3" >
                        <div class="card" data-aos="fade-up">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                            <img src="img/hc0.png" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">See Level Data
                                  </a>
                                </h4>
                              
                            </div>
                            <div class="card-read-more">
                                <a href="http://io.scsio.ac.cn/srilanka" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>


                <div class="col-xs-12 col-sm-3" >
                        <div class="card" data-aos="fade-up">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                            <img src="img/hc1.png" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">Ocean Forecast
                                  </a>
                                </h4>
                              
                            </div>
                            <div class="card-read-more">
                                <a href="http://io.scsio.ac.cn/srilanka" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-3">
                        <div class="card" data-aos="fade-up">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="img/hc2.png" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href=""> Environment Forecast
                                  </a>
                                </h4>
                               
                            </div>
                            <div class="card-read-more">
                                <a href="http://sloceanforecasts.org.s3-website-ap-southeast-2.amazonaws.com/index.html" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" data-aos="fade-up">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="img/hc3.png" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">Tuna Forcasting 
                                  </a>
                                </h4>
                               
                            </div>
                            <div class="card-read-more">
                                <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- qu acc -->
<div class="container-flueid " >
  <div class="direct-access">
   

    <div class="nav-links">
      <a href="vacancy.php" class="nav-item active"><i class="bi bi-person"></i> Vacancy</a>
      <a href="procurement.php" class="nav-item"><i class="bi bi-newspaper"></i> Procument</a>
      <a href="sessions.php" class="nav-item"><i class="bi bi-calendar"></i> NARA Scientist Session 2025</a>
    
    </div>

    <div class="search-box">
      <input type="text" placeholder="Search input">
      <i class="bi bi-search"></i>
    </div>
  </div>

 </div>
<!-- end qu acc-->




<section id="wrapper1">
  <div class="container-fostrap py-4">
    <div class="container">
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

 <!-- Card -4 -->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc8.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Test services</h4>
              </div>
              <div class="card-footer">
                <a href="http://io.scsio.ac.cn/srilanka" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>
        <!-- Card -3 -->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc6.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">ISO Certified Laboratory</h4>
              </div>
              <div class="card-footer">
                <a href="http://io.scsio.ac.cn/srilanka" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>
          <!-- Card -2 -->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc5.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Industrial Training</h4>
              </div>
              <div class="card-footer">
                <a href="http://io.scsio.ac.cn/srilanka" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>
            <!-- Card -1 -->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc4.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Technology Transfer </h4>
              </div>
              <div class="card-footer">
                <a href="http://io.scsio.ac.cn/srilanka" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>
          <!-- Card 0-->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc0.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Sea Level Data</h4>
              </div>
              <div class="card-footer">
                <a href="http://io.scsio.ac.cn/srilanka" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>

           <!-- Card 00-->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc7.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Conservation Programs</h4>
              </div>
              <div class="card-footer">
                <a href="http://io.scsio.ac.cn/srilanka" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc1.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Ocean Forecast</h4>
              </div>
              <div class="card-footer">
                <a href="http://io.scsio.ac.cn/srilanka" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc2.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Environment Forecast</h4>
              </div>
              <div class="card-footer">
                <a href="http://sloceanforecasts.org.s3-website-ap-southeast-2.amazonaws.com/index.html" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="swiper-slide">
            <div class="card h-100" data-aos="fade-up">
              <img src="img/hc3.png" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Tuna Forecasting</h4>
              </div>
              <div class="card-footer">
                <a href="#" class="btn  w-100">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Swiper Controls -->
       <!-- <div class="swiper-pagination"></div>-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>



<!-- End Card -->
 <!-- News Filter -->
<?php
    require('news-filter.php');
?>

<!-- End News Filter -->
<!-- Start About NARA -->
		<section class="call-action overlay d-flex align-items-center" data-stellar-background-ratio="0.5" style="min-height: 300px;">
  <div class="container">
    <div class="row text-center text-white justify-content-center">

      <!-- Projects -->
      <div class="col-md-3 col-6 mb-4">
        <i class="bi bi-folder-fill fs-1 mb-2"></i>
        <h2 class="counter" data-target="500">0</h2>
        <p>Projects</p>
      </div>

      <!-- Services -->
      <div class="col-md-3 col-6 mb-4">
        <i class="bi bi-gear-fill fs-1 mb-2"></i>
        <h2 class="counter" data-target="10">0</h2>
        <p>Services</p>
      </div>

      <!-- Research -->
      <div class="col-md-3 col-6 mb-4">
   <i class="bi bi-search fs-1 mb-2"></i>


        <h2 class="counter" data-target="1000">0</h2>
        <p>Research Paper</p>
      </div>

      <!-- Branches -->
      <div class="col-md-3 col-6 mb-4">
        <i class="bi bi-building fs-1 mb-2"></i>
        <h2 class="counter" data-target="6">0</h2>
        <p>Research Center</p>
      </div>

    </div>
  </div>
</section>

<!-- End About NARA-->

 


 <!-- End News Card -->
 <!--<section>
    	<div class="col-lg-12 col-md-12 col-12">
						<div  style="text-align: center;">
							<h2 style="margin-top: 25px !important;">Vacancy</h2>
            </div>
          </div>
  <div class="container mt-4 mb-5">
    
    <div class="row justify-content-center">
    
     


  <section>
  <div class="container mt-4 mb-5">
    <div class="row justify-content-center">-->

      <?php
      /*
      include 'db.php'; 

    
      $sql = "SELECT * FROM vacancies ORDER BY id DESC LIMIT 4";

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
          */
      ?>
<!--
    </div>
  </div>
</section>-->






    </div>
  </div>
</section>
<!-- Organization Link -->
<div class="col-lg-12 col-md-12 col-12">
						<div  style="text-align: center;">
							<h2 style="margin-top: 25px !important;" class="mb-5">Related organizations</h2>
            </div>
          </div>
  <div class="owl-carousel owl-theme" >
    <a href="https://www.pmoffice.gov.lk/"><div class="item"><img src="img/ol1.jpg" alt="" ></div></a>
    <a href="https://www.president.gov.lk/"><div class="item"><img src="img/images.jfif" alt="" style="width:100px;height:100px;"></div></a>
    <a href="https://www.presidentsoffice.gov.lk/"><div class="item"><img src="img/ol1.jpg" alt=""></div></a>
    <a href="https://pmd.gov.lk/"><div class="item"><img src="img/ol1.jpg" alt=""></div></a>
    <a href="https://govpay.lk/en/"><div class="item"><img src="img/ol1.jpg" alt=""></div></a>
    
</div>

<!-- End organization Link -->
 <!-- Newslater -->
<section class="subscribe">
      <div class="container">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Register now for the  newsletter "NARA" and receive regularly the latest information</p>
        </div>

      <form method="post" action="#">
  <div class="d-flex justify-content-center align-items-center flex-wrap gap-2">
    <input type="text" class="form-control" placeholder="Enter your Email">
    <button type="submit">Subscribe</button>
  </div>
</form>

      </div>
    </section>
 <!-- End Newslater -->
<!-- Usefull Link -->

  <div class="owl-carousel owl-theme" >
    <a href="https://www.pmoffice.gov.lk/"><div class="item"><img src="img/ul1.jpg" alt=""></div></a>
    <a href="https://www.president.gov.lk/"><div class="item"><img src="img/ul2.jpg" alt=""></div></a>
    <a href="https://www.presidentsoffice.gov.lk/"><div class="item"><img src="img/ul3.jpg" alt=""></div></a>
    <a href="https://pmd.gov.lk/"><div class="item"><img src="img/ul4.jpg" alt=""></div></a>
    <a href="https://govpay.lk/en/"><div class="item"><img src="img/ul5.png" alt=""></div></a>
    
</div>

<!-- End Usefull Link -->



<!-- map -->
 <!-- Contact Start -->
    <div class="container-fluid py-5" style="background-color: #dae5f7ff;">
        <div class="container py-5">
            <!--<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Have Any Query? Feel Free To Contact Us</h1>
                <p class="mb-5">
                  
                </p>
            </div>-->
           <!-- <div class="row contact-info position-relative g-0 mb-5">
                <div class="col-lg-6">
                    <a href="tel:+0123456789" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-phone text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Call Us</h5>
                            <h2 class="text-white mb-0">+012 345 67890</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="mailto:info@example.com" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-envelope text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Mail Us</h5>
                            <h2 class="text-white mb-0">info@example.com</h2>
                        </div>
                    </a>
                </div>
            </div>-->
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  
                   
                   <form id="contactForm">
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                <label for="subject">Subject</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px" required></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
        </div>
    </div>
</form>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                   


                    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126729.25411603723!2d79.871518!3d6.975167!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25887d02194c9%3A0xc6ced3461d4c7014!2sThe%20National%20Aquatic%20Resources%20Research%20and%20Development%20Agency%20(NARA)!5e0!3m2!1sen!2sus!4v1757246059241!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<!-- end map -->





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

  
<!-- jQuery -->


<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        if(name == "" || email == "" || subject == "" || message == ""){
            Swal.fire("Error!", "Please fill out all fields.", "error");
            return;
        }

        $.ajax({
            url: 'save_message.php',
            type: 'POST',
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            success: function(response) {
                if(response.trim() === 'success'){
                    Swal.fire({
                        title: 'Message Sent!',
                        text: 'Your message has been submitted successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                    $('#contactForm')[0].reset();
                } else {
                    Swal.fire("Error!", "Failed to send message. Try again.", "error");
                }
            },
            error: function() {
                Swal.fire("Error!", "Something went wrong with the request.", "error");
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

  <script>
// Home Services


// End
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,              // enable autoplay
    autoplayTimeout: 2000,       // time between slides (ms)
    autoplayHoverPause: true,    // pause when hover
    smartSpeed: 600,             // transition speed
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});

  </script>
 

  <script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  const speed = 200; // smaller = faster

  const animateCounters = () => {
    counters.forEach(counter => {
      const update = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = Math.ceil(target / speed);
        if (count < target) {
          counter.innerText = count + inc;
          setTimeout(update, 30);
        } else {
          counter.innerText = target + '+';
        }
      };
      update();
    });
  };

  // Trigger when section is visible
  const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) {
      animateCounters();
      observer.disconnect();
    }
  }, { threshold: 0.5 });

  observer.observe(document.querySelector('.call-action'));
});
</script>
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
      delay: 3000, // 3s per slide
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1, // Mobile
      },
      576: {
        slidesPerView: 2, // Small tablets
      },
      992: {
        slidesPerView: 3, // Desktop
      },
    },
  });
</script>
<script>
  // Select filter buttons & cards
  const filterButtons = document.querySelectorAll("#filter-buttons button");
  const filterableCards = document.querySelectorAll("#filterable-cards .card");

  // Function to filter
  const filterCards = (e) => {
    document.querySelector("#filter-buttons .active").classList.remove("active");
    e.target.classList.add("active");

    const filter = e.target.dataset.filter;

    filterableCards.forEach(card => {
      if (filter === "all" || card.dataset.name === filter) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  };

  filterButtons.forEach(button => button.addEventListener("click", filterCards));
</script>
</body>

</html>