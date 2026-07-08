   <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Our Office</h6>
                        <span>Crow Island,Mattakkuliya,Colombo 15</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span>postmaster@nara.ac.lk</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Call Us</h6>
                        <span>+94 11- 2521000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top  bg-light-radial shadow-sm px-5 pe-lg-0" style="background-color:#75D1FF">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0" style="background-color:#75D1FF !important;">
            <a href="home.php" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><!--<i class="bi bi-building text-primary me-2"></i>--><img src="img/logo.png" alt="" id="logo_im"> </h1>
            </a>
<!--Language Section -->
<a class="lang-btn lang-link" href="home.php#googtrans(si)">සිංහල</a>
  <a class="lang-btn lang-link" href="home.php#googtrans(ta)">தமிழ்</a>
  <a class="lang-btn lang-link" href="home.php#googtrans(en)">English</a>
 
<!--End Language Section -->


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                

<div class="navbar-nav ms-auto py-0" style="margin-right:5px;">
    <a href="home.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : '' ?>">Home</a>
  
     <div class="nav-item dropdown">
        <?php 
            $dropdown_pages = ['overview.php','nara-act.php'];
            $is_dropdown_active = in_array(basename($_SERVER['PHP_SELF']), $dropdown_pages);
        ?>
        <a href="#" class="nav-item nav-link dropdown-toggle <?= $is_dropdown_active ? 'active' : '' ?>" data-bs-toggle="dropdown">About Us</a>
        <div class="dropdown-menu m-0">
            <a href="overview.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'overview.php' ? 'active' : '' ?>">Overview</a>
            <a href="nara-act.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'nara-act.php' ? 'active' : '' ?>">NARA Act</a>
          
        </div>
    </div>
   
    <div class="nav-item dropdown">
        <?php 
            $dropdown_pages = ['research-divisions.php','regional-research-centers.php','supporting-divisions.php'];
            $is_dropdown_active = in_array(basename($_SERVER['PHP_SELF']), $dropdown_pages);
        ?>
        <a href="#" class="nav-item nav-link dropdown-toggle <?= $is_dropdown_active ? 'active' : '' ?>" data-bs-toggle="dropdown">Division</a>
        <div class="dropdown-menu m-0">
            <a href="research-divisions.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'research-divisions.php' ? 'active' : '' ?>">Research Divisions</a>
            <a href="regional-research-centers.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'regional-research-centers.php' ? 'active' : '' ?>">Regional Research Centers</a>
           <a href="supporting-divisions.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'supporting-divisions.php' ? 'active' : '' ?>">Supporting Divisions</a>
          
        </div>
    </div>
    
    
    <a href="services.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>">Services</a>
  

<div class="nav-item dropdown">
        <?php 
            $dropdown_pages = ['events.php','vacancies.php'];
            $is_dropdown_active = in_array(basename($_SERVER['PHP_SELF']), $dropdown_pages);
        ?>
        <a href="#" class="nav-item nav-link dropdown-toggle <?= $is_dropdown_active ? 'active' : '' ?>" data-bs-toggle="dropdown">News</a>
        <div class="dropdown-menu m-0">
            <a href="events.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'events.php' ? 'active' : '' ?>">Events</a>
            <a href="vacancy.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'vacancy.php' ? 'active' : '' ?>">Vacancy</a>
          
        </div>
    </div>



    <div class="nav-item dropdown">
        <?php 
            $dropdown_pages = ['publication.php','reports.php','Journal.php','rti-form.php'];
            $is_dropdown_active = in_array(basename($_SERVER['PHP_SELF']), $dropdown_pages);
        ?>
        <a href="#" class="nav-item nav-link dropdown-toggle <?= $is_dropdown_active ? 'active' : '' ?>" data-bs-toggle="dropdown">Download</a>
        <div class="dropdown-menu m-0">
            <a href="publication.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'publication.php' ? 'active' : '' ?>">Publication</a>
            <a href="reports.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'reports.php' ? 'active' : '' ?>">Reports</a>
            <a href="journal.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'journal.php' ? 'active' : '' ?>">NARA Journal</a>
       <a href="rti-form.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'rti-form.php' ? 'active' : '' ?>">RTI Forms/Reports</a>
       
        </div>
    </div>

    <a href="contact.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact Us</a>

  <div class="nav-item dropdown">
        <?php 
            $dropdown_pages = ['gate.php'];
            $is_dropdown_active = in_array(basename($_SERVER['PHP_SELF']), $dropdown_pages);
        ?>
        <a href="#" class="nav-item nav-link dropdown-toggle <?= $is_dropdown_active ? 'active' : '' ?>" data-bs-toggle="dropdown">Office Use</a>
        <div class="dropdown-menu m-0">
            <a href="gate.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'gate.php' ? 'active' : '' ?>">Gate Pass</a>
          
       
        </div>
    </div>

<!-- <a href="" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Get A Quote <i class="bi bi-arrow-right"></i></a>
--> 
</div>

 
                 <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="project.php" class="dropdown-item">Our Project</a>
                            <a href="team.php" class="dropdown-item">The Team</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="blog.php" class="dropdown-item">Blog Grid</a>
                            <a href="detail.php" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>-->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
