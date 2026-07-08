<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - ISIMBU MEDURA</title>
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


    
table { width: 100%; text-align: left; border-spacing: 0; border-collapse: collapse; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }

th, td { font-family: inherit; font-size: .875em; line-height: 1.45; color: #444; vertical-align: middle; padding: 1em; }
th { font-weight: 600; }

colgroup:nth-child(1) { width: 31%; border: 0 none; }
colgroup:nth-child(2) { width: 22%; border: 1px solid #ccc; }
colgroup:nth-child(3) { width: 25%; border: 10px solid #59c7fb; }
colgroup:nth-child(4) { width: 22%; border: 1px solid #ccc; }

/* Tablehead */

thead th { background: #def4fe; background: -moz-linear-gradient(top,  #ffffff 0%, #f5f5f5 100%); background: -webkit-linear-gradient(top,  #ffffff 0%,#f5f5f5 100%); background: -o-linear-gradient(top,  #ffffff 0%,#f5f5f5 100%); background: -ms-linear-gradient(top,  #ffffff 0%,#f5f5f5 100%); background: linear-gradient(to bottom,  #ffffff 0%,#f5f5f5 100%); text-align: center; position: relative; border-bottom: 1px solid #ccc; padding: 3em 0 2em; font-weight: 400; color: #999; }
thead th:nth-child(1) { background: transparent;  }
thead th:nth-child(3) {  padding: 2em 0 5em; }
thead th h2 { font-weight: 300; font-size: 2.4em; line-height: 1.2; color: #59c7fb; }
thead th h2 + p { font-size: 1.25em; line-height: 1.4; }
thead th:nth-child(3) h2 { font-size: 3.6em; }
thead th:nth-child(3) h2 + p { font-size: 1.5em; }

thead th p.promo { font-size: 1em; color: #fff; position: absolute; top: 9em; left: -17px; z-index: 1000; width: 100%; margin: 0; padding: .625em 17px .75em; background: #c00; box-shadow: 0 2px 4px rgba(0,0,0,.25); border-bottom: 1px solid #900; }

thead th p.promo:before { content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 0 7px 7px 0; border-color: transparent #900 transparent transparent; bottom: -7px; left: 0; }
thead th p.promo:after { content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 7px 7px 0 0; border-color: #900 transparent transparent transparent; bottom: -7px; right: 0; }

/* Tablebody */

tbody th { background: #fff; border-left: 1px solid #ccc; }
tbody th span { font-weight: normal; font-size: 87.5%; color: #999; display: block; }

tbody td { background: #fff; text-align: center; }

tbody tr:nth-child(even) th,
tbody tr:nth-child(even) td { background: #f5f5f5; border: 1px solid #ccc; border-width: 1px 0 1px 1px; }
tbody tr:last-child td { border-bottom: 0 none; }

/* Tablefooter */

tfoot th  { padding: 2em 1em; border-top: 1px solid #ccc; }
tfoot td  { text-align: center; padding: 2em 1em; border-top: 1px solid #ccc; }

tfoot a  { font-weight: bold; color: #fff; text-decoration: none; text-transform: uppercase; display: block; padding: 1.125em 2em; background: #59c7fb; border-radius: .5em; }


</style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header16">
        <h1 class="display-3 text-uppercase text-white mb-3 glow-text">ISIMBU MEDURA</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">ISIMBU MEDURA</h6>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Card --> 

<div class="container py-5">
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/navi14.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                     
                        <h1 class="display-6 mb-4">
If you wish to utilizing <span class="text-primary">ISIMBU </span> MEDURA</h1>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                        
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
  </div>

  <!-- Price table -->

  <div class="container py-5">
<h1>Pricing Table</h1>
  <p>Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	<table class="py-5">

		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
	

	    <thead>
	    	<tr>
	    		<th>&nbsp;</th>
	    		<th>
	    			<h4>For a Whole Day</h4>
	    			<p></p>
	    		</th>
	    		<th>
	    			<h4>For a Half Day</h4>
	    			<p></p>
	    			<!--<p class="promo">Our most valuable package!</p>-->
	    		</th>
	    	
	    	</tr>
	    </thead>

	    <tfoot>
	    	<tr>
	    		<th>&nbsp;</th>
	    		<td><a href="#">Book Now</a></td>
	    		<td><a href="#">Book Now</a></td>
	    	
	    	</tr>
	    </tfoot>

	    <tbody>
	    	<tr>
	    		<th>For all NARA Activities</th>
	    		<td>Free</td>
	    		<td>Free</td>
	    	
	    	</tr>
	    
	    	<tr>
	    		<th>For Activities related projects of NARA</th>
	    		<td>Rs. 10,000/=</td>
	    		
	    		<td>Rs. 5,000/=</td>
	    	</tr>
	    	<tr>
	    		<th>For institutions functions under the Ministry of Fisheries</th>
	    		<td>Rs. 12,000/=</td>
	    		
	    		<td>Rs. 6,000/=</td>
	    	</tr>
	    	<tr>
	    		<th>For institutions / organizations related to fisheries sector</th>
	    		<td>Rs. 15,000/=</td>
	    
	    		<td>Rs. 7,500/=</td>
	    	</tr>
	    	<tr>
	    		<th>For institutions / organizations not related to fisheries sector</th>
	    		<td>Rs. 20,000/=</td>
	    		<td>Rs. 10,000/=</td>
	    	
	    	</tr>
	    	</tr>
	    </tbody>

	</table>
</div>
<!-- End Price table -->





    

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