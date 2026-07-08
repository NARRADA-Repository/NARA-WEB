<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NARA | Books</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
   <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/mega.css">
  <style>
    
    #logo_im{
    width: 80px !important;
    height:80px !important;
}
/*
    h1 {
      text-align: center;
      background-color: #072e99;
      color: #f6f8fc; 
      padding: 10px 20px;
      border-radius: 8px;
    }*/
a{
  text-decoration:none;
}
    .book-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
  justify-items: center;
  margin-top: 30px;
  max-width: 1100px;
  margin-left: auto;
  margin-right: auto;
}

.book-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  padding: 12px;
  width: 220px;
  display: flex;
  flex-direction: column;
  align-items: center;
}


    .book-card img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-radius: 8px;
}


    .book-card h3 {
      margin: 10px 0 5px;
      font-size: 20px;
    }

    .book-card p {
      color: #555;
      font-size: 14px;
      text-align: center;
    }

    .book-card button {
      margin-top: 12px;
      background: #007bff;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 8px;
      cursor: pointer;
    }

    .book-card button:hover {
      background: #0056b3;
    }

    /* See More Modal */
    #seeMoreModal {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .see-more-content {
      background: #fff;
      padding: 40px;
      width: 90%;
      max-width: 1000px;
      max-height: 90vh;
      overflow-y: auto;
      border-radius: 20px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.2);
      position: relative;
      animation: slideUp 0.4s ease forwards;
    }

    .see-more-body {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
    }

    .see-more-body img {
      width: 280px;
      border-radius: 12px;
    }

    .see-more-text {
      flex: 1;
    }

    .see-more-text h2 {
      font-size: 26px;
      margin-bottom: 10px;
    }

    .see-more-text h4 {
      font-weight: 400;
      color: #666;
      margin-bottom: 20px;
    }

    .see-more-text p.price {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
    }

    .see-more-text button {
      margin-top: 20px;
      padding: 10px 20px;
      background: #28a745;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    .see-more-text button:hover {
      background: #1f8a36;
    }

    #closeSeeMore {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 30px;
      background: none;
      border: none;
      cursor: pointer;
      color: #aaa;
    }

    #seeMoreOverlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.6);
      display: none;
      z-index: 999;
    }

    @keyframes slideUp {
      from { transform: translateY(80px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    /* Cart UI */
    #cartContainer {
      position: fixed;
      top: 180px;
      right: 30px;
      z-index: 1100;
    }

    #cartButton {
      font-size: 24px;
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 50px;
      cursor: pointer;
    }

    #cartCount {
      background: red;
      color: white;
      font-size: 14px;
      padding: 2px 8px;
      border-radius: 12px;
      margin-left: 6px;
    }

    #cartModal {
      position: fixed;
      right: 20px;
      top: 80px;
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      display: none;
      z-index: 1100;
    }

    #cartModal h3 {
      margin-top: 0;
    }

    #cartItems {
      list-style: none;
      padding: 0;
    }

    #cartItems li {
      margin-bottom: 10px;
    }

    .closeCart {
      position: absolute;
      top: 10px;
      right: 12px;
      font-size: 20px;
      background: none;
      border: none;
      cursor: pointer;
      color: #999;
    }

    .checkoutBtn {
      margin-top: 10px;
      background: #28a745;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      cursor: pointer;
    }
    /* Checkout section */
    #checkoutSection { display: none; background: white; padding: 30px; margin-top: 30px; border-radius: 10px; box-shadow: 0 8px 30px rgba(0,0,0,0.1); }
    #checkoutBooks label { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    #paymentOptions label { margin-right: 20px; }
    #buyerDetails input { display: block; margin-bottom: 10px; padding: 8px; width: 100%; max-width: 400px; }
    #confirmPurchase { margin-top: 20px; background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; }
    /* Payment overlay and OTP */
    #paymentOverlay { position: fixed; top: 0;left: 0;width: 100%;height: 100%;background: rgba(0,0,0,0.7);display: none;align-items: center;justify-content: center;z-index: 2000; }
    .payment-content { background: white; padding: 30px; border-radius: 12px; width: 90%; max-width: 500px; position: relative; animation: slideUp 0.3s ease-out; }
   /* .payment-content h2,p { text-align: center; margin-bottom: 20px; }*/
    .mock-payment-ui input { width: 100%; padding: 8px; margin-bottom: 10px; }
    .mock-payment-ui button.payNowBtn { width: 100%; padding: 12px; background: #28a745; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; }
    .mock-payment-ui button.payNowBtn:hover { background: #218838; }
    .closePayment { position: absolute; top: 10px; right: 12px; background: none; border: none; font-size: 24px; cursor: pointer; color: #999; }
  </style>
</head>
<body>
<?php
    require('navi.php');
?>
 <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Books</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Books</h6>
        </div>
    </div>
    <!-- Page Header Start -->



<!-- Cart Button -->
<div id="cartContainer">
  <button id="cartButton" aria-label="View Cart">🛒<span id="cartCount">0</span></button>
</div>

<div id="cartModal">
  <button class="closeCart">&times;</button>
  <h3>Selected Books</h3>
  <ul id="cartItems"></ul>
  <p id="cartTotal">Total: LKR 0</p>
  <button class="checkoutBtn">Checkout</button>
</div>

<div class="book-grid mb-5" id="bookGrid"></div>

<div id="checkoutSection">
  <h2>Confirm Your Purchase</h2>
  <form id="checkoutForm">
    <div id="checkoutBooks"></div>
    <h3>Payment Option</h3>
    <div id="paymentOptions">
      <label><input type="radio" name="payment" value="GovPay" required checked> GovPay</label>
    </div>
    <h3>Buyer Information</h3>
    <div id="buyerDetails">
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="text" name="address" placeholder="Address" required />
      <input type="text" name="city" placeholder="City" required />
      <input type="tel" name="phone" placeholder="Phone Number" required />
    </div>
    <button type="submit" id="confirmPurchase">Buy Now</button>
  </form>
</div>

<div id="paymentOverlay">
  <div class="payment-content">
    <button class="closePayment">&times;</button>
    <h2 id="paymentTitle">GovPay Payment</h2>
    <p id="paymentDesc">Enter your details to complete payment with GovPay.</p>
    <div class="mock-payment-ui" id="mockGov">
      <h3>GovPay</h3>
      <input placeholder="NIC Number" required /><br/>
      <input placeholder="Email" type="email" required /><br/>
      <button class="govpay-button" onclick="payWithGovPay()">Pay with GovPay</button>
    </div>
  </div>
</div>



<!-- See More Modal -->
<div id="seeMoreModal">
  <div class="see-more-content">
    <button id="closeSeeMore">&times;</button>
    <div class="see-more-body">
      <img id="seeMoreCover" src="" alt="Book Cover">
      <div class="see-more-text">
        <h2 id="seeMoreTitle"></h2>
        <h4 id="seeMoreAuthor"></h4>
        <p id="seeMoreDescription"></p>
        <p id="seeMorePrice" class="price"></p>
        <button id="addToCartFromModal">Add to Cart</button>
      </div>
    </div>
  </div>
</div>
<div id="seeMoreOverlay"></div>

<script>
  const books = [
    {
      name: "",
      Author: "",
      description: "Dive into the mysteries of the deep sea.",
      price: 300,
      cover: "img/bk1.jpg"
    },
    {
      name: "",
      Author: "",
      description: "Explore the vibrant world of coral ecosystems.",
      price: 250,
      cover: "img/bk2.png"
    },
    {
      name: "",
      Author: "",
      description: "A comprehensive guide to marine species.",
      price: 300,
      cover: "img/bk3.png"
    },
    {
      name: "",
      Author: "",
      description: "",
      price: 250,
      cover: "img/bk4.png"
    },
    {
      name: " ",
      Author: "",
      description: "Farming Aquatic Animals and Plants.",
      price: 200,
      cover: "img/bk5.png"
    }
  ];

  const bookGrid = document.getElementById("bookGrid");
  const cartModal = document.getElementById("cartModal");
  const cartButton = document.getElementById("cartButton");
  const closeCart = document.querySelector(".closeCart");
  const cartItems = document.getElementById("cartItems");
  const cartCount = document.getElementById("cartCount");
  const cartTotal = document.getElementById("cartTotal");
  const checkoutBtn = document.querySelector(".checkoutBtn");
  const checkoutSection = document.getElementById("checkoutSection");
  const checkoutBooks = document.getElementById("checkoutBooks");
  const checkoutForm = document.getElementById("checkoutForm");
  const addToCartFromModal = document.getElementById("addToCartFromModal");
  const seeMoreModal = document.getElementById("seeMoreModal");
  const seeMoreOverlay = document.getElementById("seeMoreOverlay");
  const closeSeeMore = document.getElementById("closeSeeMore");

 let cart = [];
let currentBook = null;


  // Render books in grid
  books.forEach((book, index) => {
    const card = document.createElement("div");
    card.className = "book-card";
    card.innerHTML = `
      <img src="${book.cover}" alt="${book.name}">
      <h3>${book.name}</h3>
      <p>${book.Author}</p>
      <button class="seeMoreBtn" data-index="${index}">Buy Now</button>
    `;
    bookGrid.appendChild(card);
  });

  // Show See More modal on button click
  document.querySelectorAll(".seeMoreBtn").forEach(btn => {
    btn.addEventListener("click", () => {
      const index = btn.dataset.index;
      const book = books[index];
      currentBook = book;

      document.getElementById("seeMoreCover").src = book.cover;
      document.getElementById("seeMoreTitle").textContent = book.name;
      document.getElementById("seeMoreAuthor").textContent = `by ${book.Author}`;
      document.getElementById("seeMoreDescription").textContent = book.description;
      document.getElementById("seeMorePrice").textContent = `Price: LKR ${book.price}`;
      seeMoreModal.style.display = "flex";
      seeMoreOverlay.style.display = "block";
      document.body.style.overflow = "hidden";
    });
  });

  closeSeeMore.addEventListener("click", () => {
    seeMoreModal.style.display = "none";
    seeMoreOverlay.style.display = "none";
    document.body.style.overflow = "";
  });

  seeMoreOverlay.addEventListener("click", () => {
    closeSeeMore.click();
  });

  // Add to cart from See More modal
  addToCartFromModal.addEventListener("click", () => {
  if (currentBook) {
    cart.push(currentBook);
    updateCartUI();
    alert(`${currentBook.name} added to cart.`);
  }
});


  // Show/hide cart modal
  cartButton.addEventListener("click", () => {
    cartModal.style.display = cartModal.style.display === "block" ? "none" : "block";
  });

  closeCart.addEventListener("click", () => {
    cartModal.style.display = "none";
  });

  // Update cart UI elements
  function updateCartUI() {
  cartItems.innerHTML = "";
  let total = 0;
  cart.forEach((item, idx) => {
    const li = document.createElement("li");
    li.textContent = `${item.name} - LKR ${item.price}`;
    cartItems.appendChild(li);
    total += item.price;
  });
  cartCount.textContent = cart.length;
  cartTotal.textContent = `Total: LKR ${total}`;
}

  // Checkout button click: show checkout section with selected books
  checkoutBtn.addEventListener("click", () => {
    if (cart.length === 0) {
      alert("Your cart is empty.");
      return;
    }
    checkoutSection.style.display = "block";
    checkoutBooks.innerHTML = "";

    cart.forEach(book => {
      const label = document.createElement("label");
      label.innerHTML = `<input type="checkbox" name="selectedBooks" value="${book.name}" checked> ${book.name} - LKR ${book.price}`;
      checkoutBooks.appendChild(label);
    });
    window.scrollTo({ top: checkoutSection.offsetTop, behavior: 'smooth' });
  });

checkoutForm.addEventListener("submit", e => {
  e.preventDefault();

  const selectedBooks = [...checkoutForm.querySelectorAll('input[name="selectedBooks"]:checked')].map(i => i.value);
  if (selectedBooks.length === 0) {
    alert("Please select at least one book to purchase.");
    return;
  }

  const formData = new FormData(checkoutForm);
  const buyerName = formData.get("name").trim();
  const address = formData.get("address").trim();
  const city = formData.get("city").trim();
  const phone = formData.get("phone").trim();
  const paymentMethod = formData.get("payment");

  if (!buyerName || !address || !city || !phone || !paymentMethod) {
    alert("Please fill in all required fields.");
    return;
  }

  // ✅ If GovPay selected → go directly to link
  if (paymentMethod === "GovPay") {
    window.location.href = "https://govpay.lk/en/organization/nara";
    return; // stop here, don't show modal
  }

  // Otherwise show the payment overlay for Card
  document.getElementById("paymentOverlay").style.display = "flex";
  document.getElementById("mockCard").style.display = "block";
  document.getElementById("mockGov").style.display = "none";
  document.getElementById("paymentTitle").textContent = "Card Payment";
});


  

  // Close overlay
  document.querySelector(".closePayment").addEventListener("click", () => {
    document.getElementById("paymentOverlay").style.display = "none";
  });

  // Simulate payment action
  document.querySelectorAll(".payNowBtn").forEach(btn => {
    btn.addEventListener("click", () => {
      alert("Payment submitted successfully!");
      document.getElementById("paymentOverlay").style.display = "none";
      window.location.reload(); // Reset form (optional)
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

<!--<div id="google_translate_element" style="display:none;"></div>-->
<?php
    require('footer.php');
?>
<!--<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 


</body>
</html>
