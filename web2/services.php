<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NARA" name="keywords">
    <meta content="National Aquatic Resources Research and Development Agency" name="description">
    <title>NARA - Services </title>
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
    }
              /* Main Content */
    main { padding: 40px 5% 60px; max-width: 1200px; margin: 0 auto; }
    .intro { text-align: center; margin-bottom: 40px; font-size: 1.2rem; }
    .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; }
    .service-card { background: var(--card-bg); border-radius: 12px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); transform: translateY(30px); transition: opacity 0.6s ease-out, transform 0.6s ease-out; position: relative; }
    .service-card.visible { opacity: 1; transform: translateY(0); }
    .service-icon { font-size: 3rem; color: var(--accent); margin-bottom: 15px; }
    .service-card h3 { font-size: 1.3rem; margin-bottom: 10px; color: var(--primary); }
    .service-card p { font-size: 0.95rem; color: #555; }
    .service-card button { margin-top: 15px; padding: 10px 15px; background: var(--accent); color: white; border: none; border-radius: 6px; cursor: pointer; transition: background 0.3s; }
    .service-card button:hover { background: #008fd1; }
    .service-card:hover { transform: translateY(-5px); box-shadow: 0 6px 25px rgba(0,0,0,0.08); }
            </style>
</head>
<body>
 <?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Services</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Services</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<main>
<div class="intro">
    
    </div>

    <div class="services-grid">
      <div class="service-card shadow" data-id="S001" data-price="1500">
        <div class="service-icon">🔬</div>
        <h3>Research & Monitoring</h3>
        <p>Systematic collection and analysis of aquatic data for sustainable ecosystems.</p>
        <p></p>
        <p></p>
       <button class="add-to-cart">View</button>
      </div>

      <div class="service-card shadow" data-id="S002" data-price="2000">
        <div class="service-icon">📊</div>
        <h3>Consultancy</h3>
        <p>Expert guidance on scientific, legal, and policy-related aquatic resource matters.</p>
        <p></p>
        <p></p>
         <button class="add-to-cart">View</button>
      </div>

      <div class="service-card shadow" data-id="S003" data-price="1800">
        <div class="service-icon">🌱</div>
        <h3>Conservation Programs</h3>
        <p>Initiatives for habitat restoration, biodiversity protection, and species management.</p>
        <p></p>
        <p></p>
      <button class="add-to-cart">View</button>
      </div>

      <div class="service-card shadow" data-id="S004" data-price="2500">
        <div class="service-icon">📦</div>
        <h3>Technology & Development</h3>
        <p>Development and deployment of aquatic tech solutions for national resource challenges.</p>
        <p></p>
        <p></p>
     <button class="add-to-cart">View</button>
      </div>

      <div class="service-card shadow" data-id="S005" data-price="1200">
        <div class="service-icon">🤝</div>
        <h3>Collaborations & Training</h3>
        <p>Partnerships with institutions, capacity building, and staff training programs.</p>
        <p></p>
        <p></p>
        <button class="add-to-cart">View</button>
      </div>

      <!--<div class="service-card shadow" data-id="S006" data-price="1000">
        <div class="service-icon">🎓</div>
        <h3>Data & Publications</h3>
        <p>Transparent reporting, scientific papers, and public data dissemination.</p>
        <p>Service ID: S006</p>
        <p>Price: LKR 1,000</p>
     <button class="add-to-cart">Add to Cart</button>
      </div>-->
    </div>

    <!-- CART DISPLAY -->
<h2>Your Cart</h2>
<ul id="cartItems"></ul>
<p>Total: LKR <span id="totalPrice">0</span></p>
<button id="checkoutBtn" class="btn btn-success">Checkout</button>

<!-- Checkout Form (hidden initially) -->
<div id="checkoutFormContainer" style="display:none; margin-top:20px; border:1px solid #ccc; padding:20px; border-radius:12px; background:#f4f4f4;">
  <h3>Customer Details</h3>
  <form id="checkoutForm">
    <label for="customerName">Full Name:</label><br>
    <input type="text" id="customerName" name="customerName" required style="width:100%; padding:8px; margin-bottom:10px;"><br>

    <label for="customerNIC">NIC:</label><br>
    <input type="text" id="customerNIC" name="customerNIC" required style="width:100%; padding:8px; margin-bottom:10px;"><br>

    <label for="customerEmail">Email or Phone:</label><br>
    <input type="text" id="customerEmail" name="customerEmail" required style="width:100%; padding:8px; margin-bottom:10px;"><br>

    <button type="submit" style="padding:10px 15px; background:#00b4ff; color:white; border:none; border-radius:6px; cursor:pointer;">Submit</button>
  </form>

  <div id="generatedCodeContainer" style="display:none; margin-top:15px;">
    <p><strong>Your Service Code:</strong> <span id="serviceCode"></span></p>
    <button id="redirectGovPay" style="padding:10px 15px; background:#002c6d; color:white; border:none; border-radius:6px; cursor:pointer;">Pay via GovPay</button>
  </div>
</div>
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
  <script>
     // CART FUNCTIONALITY
  const cart = [];
  const cartItems = document.getElementById("cartItems");
  const totalPriceEl = document.getElementById("totalPrice");
  const checkoutBtn = document.getElementById("checkoutBtn");
  const checkoutFormContainer = document.getElementById("checkoutFormContainer");
  const checkoutForm = document.getElementById("checkoutForm");
  const serviceCodeEl = document.getElementById("serviceCode");
  const generatedCodeContainer = document.getElementById("generatedCodeContainer");
  const redirectGovPayBtn = document.getElementById("redirectGovPay");

  document.querySelectorAll(".add-to-cart").forEach(btn=>{
    btn.addEventListener("click", e=>{
      const card = e.target.closest(".service-card");
      const id = card.dataset.id;
      const name = card.querySelector("h3").innerText;
      const price = parseInt(card.dataset.price);
      cart.push({id,name,price});
      updateCart();
    });
  });

  function updateCart(){
    cartItems.innerHTML="";
    let total=0;
    cart.forEach(item=>{
      total+=item.price;
      const li=document.createElement("li");
      li.textContent=`${item.name} - LKR ${item.price}`;
      cartItems.appendChild(li);
    });
    totalPriceEl.textContent=total;
  }

  // Show checkout form
  checkoutBtn.addEventListener("click", ()=>{
    if(cart.length===0){
      alert("Your cart is empty!");
    } else {
      checkoutFormContainer.style.display = "block";
      checkoutForm.scrollIntoView({behavior: "smooth"});
    }
  });

  // Handle checkout form submission
  checkoutForm.addEventListener("submit", e=>{
    e.preventDefault();
    const name = document.getElementById("customerName").value.trim();
    const nic = document.getElementById("customerNIC").value.trim();
    const email = document.getElementById("customerEmail").value.trim();

    if(!name || !nic || !email){
      alert("Please fill all the fields.");
      return;
    }

    // Generate unique service code: NIC + YYYYMMDDHHMMSS
    const now = new Date();
    const datetime = now.getFullYear().toString()
                    + String(now.getMonth()+1).padStart(2,'0')
                    + String(now.getDate()).padStart(2,'0')
                    + String(now.getHours()).padStart(2,'0')
                    + String(now.getMinutes()).padStart(2,'0')
                    + String(now.getSeconds()).padStart(2,'0');

    const serviceCode = nic + datetime;
    serviceCodeEl.textContent = serviceCode;
    generatedCodeContainer.style.display = "block";
    generatedCodeContainer.scrollIntoView({behavior:"smooth"});
  });

  // Redirect to GovPay (replace URL with actual GovPay link)
  redirectGovPayBtn.addEventListener("click", ()=>{
    // Example GovPay URL
    const govPayURL = "https://govpay.lk/en/organization/nara" + serviceCodeEl.textContent;
    window.open(govPayURL, "_blank");
  });
  </script>
  <script src="https://cdn.gtranslate.net/widgets/latest/ln.js" defer></script>

</body>
</html>