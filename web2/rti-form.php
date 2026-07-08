<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - RTI Form </title>
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
           :root {
      --primary: #002c6d;
      --accent: #00b4ff;
      --bg: #f8f9fa;
      --text: #002c6d;
      --card-bg: #fff;
      --overlay-bg: rgba(0, 0, 0, 0.4);
      --transition: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
      --radius: 12px;
      --font-family: 'Inter', sans-serif;
    }      
    .rti-container {
  display: flex;
  height: calc(100vh - 65px);
  margin-top: 65px;
  max-width: 1400px; /* increased width */
  margin-left: auto;
  margin-right: auto;
  background: var(--card-bg);
  border-radius: var(--radius);
  box-shadow: 0 6px 18px rgba(0,0,0,0.07);
  overflow: hidden;
  min-height: 600px;
}


    /* RTI submenu */
    .rti-submenu {
      flex: 1;
      background: #f7fbff;
      padding: 20px 25px;
      overflow-y: auto;
      border-left: 1px solid #b0d1ff;
      display: flex;
      flex-direction: column;
    }
    .rti-submenu h3 {
      font-size: 1.6rem;
      color: var(--primary);
      font-weight: 700;
      margin-bottom: 20px;
      text-align: center;
      user-select: none;
    }
    .rti-submenu a {
      padding: 10px 15px;
      margin-bottom: 12px;
      text-decoration: none;
      color: var(--primary);
      font-weight: 600;
      border-radius: 8px;
      transition: background-color 0.25s ease, color 0.25s ease;
      user-select: none;
      font-size: 1rem;
      border: 1.5px solid transparent;
      display: block;
    }
    .rti-submenu a.active,
    .rti-submenu a:hover {
      background: var(--primary);
      color: white;
      border-color: #004080;
    }

    /* Content iframe */
   iframe {
  width: 100%; /* already set */
  min-width: 800px; /* or any larger width */
  flex: 1;
}

    .iframe-header {
      background: var(--primary);
      color: white;
      font-weight: 700;
      font-size: 1.3rem;
      padding: 14px 20px;
      user-select: none;
    }
    iframe {
      border: none;
      flex: 1;
      width: 100%;
      height: 100%;
    }

    /* Iframe toolbar */
    .iframe-toolbar {
      background: #e4f1ff;
      padding: 10px 20px;
      border-bottom: 1px solid var(--primary);
      display: flex;
      gap: 12px;
    }
    .iframe-toolbar button {
      background: var(--primary);
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .iframe-toolbar button:hover {
      background: var(--accent);
    }

    /* Footer */
    footer {
      margin-top: auto;
      background: var(--primary);
      color: white;
      font-weight: 700;
      text-align: center;
      padding: 12px 20px;
      user-select: none;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .rti-container {
        flex-direction: column;
        height: auto;
        max-width: 100%;
        border-radius: 0;
        box-shadow: none;
      }
      .rti-main-menu {
        width: 100%;
        border-right: none;
        border-bottom: 2px solid var(--primary);
        padding: 15px 15px;
        flex-direction: row;
        overflow-x: auto;
        gap: 12px;
      }
      .rti-main-menu a {
        flex: 1 0 auto;
        justify-content: center;
        padding: 10px 8px;
        font-size: 1rem;
      }
      .rti-submenu {
        border-left: none;
        border-top: 2px solid var(--primary);
        padding: 10px;
        flex-direction: row;
        overflow-x: auto;
      }
      .rti-submenu a {
        margin-bottom: 0;
        margin-right: 12px;
        border-radius: 6px;
      }
      .iframe-container {
        flex: unset;
        height: 500px;
        border-radius: 0;
      }
    }

            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">RTI Form</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">RTI Form</h6>
        </div>
    </div>
    <!-- Page Header Start -->



  <!-- Main Content -->
  <main class="rti-container" role="main" aria-label="Right To Information page content">


    <!-- RTI Submenu -->
    <nav class="rti-submenu" aria-label="RTI Forms and Reports">
      <h3>RTI Forms</h3>
      <a href="rti-forms/Information-Application-RTI-01.pdf" target="content-frame" class="active" onclick="setActive(this)">Information Application (RTI-01)</a>
      <a href="rti-forms/Acknowledgement-RTI-02.pdf" target="content-frame" onclick="setActive(this)">Acknowledgement (RTI-02)</a>
      <a href="rti-forms/Register-of-Information-Requests-RTI-03.pdf" target="content-frame" onclick="setActive(this)">Register of Information Requests (RTI-03)</a>
      <a href="rti-forms/Decision-to-Provide-Information-RTI-04.pdf" target="content-frame" onclick="setActive(this)">Decision to Provide Information (RTI-04)</a>
      <a href="rti-forms/Rejection-of-Information-Request-RTI-05.pdf" target="content-frame" onclick="setActive(this)">Rejection of Information Request (RTI-05)</a>
      <a href="rti-forms/Extension-of-time-to-provide-information-RTI-06.pdf" target="content-frame" onclick="setActive(this)">Extension of time to provide information (RTI-06)</a>
      <a href="rti-forms/Communication-to-Third-Party-RTI-07.pdf" target="content-frame" onclick="setActive(this)">Communication to Third Party (RTI-07)</a>
      <a href="rti-forms/Acceptance-of-Appeal-RTI-08.pdf" target="content-frame" onclick="setActive(this)">Acceptance of Appeal (RTI-08)</a>
      <a href="rti-forms/Act-No-12-of-2016-Register-of-Appeal-RTI-09.pdf" target="content-frame" onclick="setActive(this)">Act No 12 of 2016 Register of Appeal (RTI-09)</a>
      <a href="rti-forms/Appeal-to-the-Designated-Officer-RTI-10.pdf" target="content-frame" onclick="setActive(this)">Appeal to the Designated Officer (RTI-10)</a>
      <a href="rti-forms/Register-of-Rejection-of-Requests-RTI-11.pdf" target="content-frame" onclick="setActive(this)">Register of Rejection of Requests (RTI-11)</a>
      <a href="rti-forms/Details-of-the-Information-Officers-RTI-12.pdf" target="content-frame" onclick="setActive(this)">Details of the Information Officers (RTI-12)</a>

      <h3 style="margin-top: 40px;">RTI Reports</h3>
      <a href="files/research-outlook.pdf" target="content-frame" onclick="setActive(this)">Biannual Report</a>
      <a href="rti-reports/decisions-policies.html" target="content-frame" onclick="setActive(this)">Decisions & Policies</a>
      <a href="rti-reports/budget-information.html" target="content-frame" onclick="setActive(this)">Budget Information</a>
      <a href="rti-reports/action-plan.html" target="content-frame" onclick="setActive(this)">Action plan</a>
      <a href="rti-reports/annual-report.html" target="content-frame" onclick="setActive(this)">Annual Report</a>
      <a href="rti-reports/physical-financial-progress.html" target="content-frame" onclick="setActive(this)">Physical and Financial Progress Report</a>
      <a href="rti-reports/projects-report.html" target="content-frame" onclick="setActive(this)">Projects Report</a>
      <a href="rti-reports/other-reports.html" target="content-frame" onclick="setActive(this)">Other Reports</a>
      <a href="rti-reports/procurement-information.html" target="content-frame" onclick="setActive(this)">Procurement Information</a>
    </nav>

    <!-- Iframe Content -->
    <section class="iframe-container" aria-label="RTI Content Display">
      <div class="iframe-header" id="iframe-title">Information Application (RTI-01)</div>
      <div class="iframe-toolbar" role="toolbar" aria-label="Iframe controls">
      </div>
      <iframe id="content-frame" name="content-frame" src="rti-forms/rti-01.html" title="RTI Content"></iframe>
    </section>
  </main>



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