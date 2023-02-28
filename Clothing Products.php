<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/Logo .png">
  <title>Hmong Traditional Clothing</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css"> 
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./home.css">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  
  <!-- Nav Section -->
  <div style="position: sticky; top: 0px;">
  <div class="nav"  style="position: sticky; top: 0;">   
    <div class="container">
      <div class="nav__wrapper">
         <a href="./user_page.php" class="logo">
          <img src="./image/LOGO.svg">
        </a>
        <nav>
          <div class="nav__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-menu">
              <line x1="3" y1="12" x2="21" y2="12" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
          </div>
          <div class="nav__bgOverlay"></div>
          <ul class="nav__list">
            <div class="nav__close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </div>
          <!-- <div style="position: fixed;"> -->
            <div class="nav__list__wrapper" style="margin-top: 40px;">

              <li><a class="btn primary-btn" href="./user_page.php">Home</a></li>
              <li><a class="btn primary-btn" href="./Clothing Products.php">Order Clothing Products</a></li>
              <li><a class="btn primary-btn" href="./about.php">About</a></li>
              <li><a class="btn primary-btn" href="./contact.php">Contact</a></li>
              <li><a onclick="openCart()" class="btn primary-btn" href="#"><div class="nav-profile-cart">My cart<i class="fas fa-cart-shopping"></i></div></a></li>
              <li><a class="btn primary-btn" href="./login.php">Login</a></li>
              <div id="cartcount" class="cartcount" style="display: none;">
                
              </div>
            </div>
          <!-- </div> -->
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
  <!-- End Nav Section -->
  <!-- Our Specials -->
  <section id="ourSpecials" data-aos="fade-up" style="margin-top: 59px;">
    <div class="container">
      <div id="Productlist" class="ourSpecials__wrapper">
       
      </div>
    </div>
  </section>
  <!-- End Our Specials -->
  <!-- Top Dishes -->
  <!-- ໜ້າ1 -->
  <section id="dishGrid" data-aos="fade-down">
    <div class="container">
      <h2 class="dishGrid__title" style="font-family: saysettha ot;">
        Top Hmong Fashion Clothing (ຊຸດມົ້ງແຟຊັ່ນຕົວຂາຍດີ)
      </h2>
      <div id="Productlist1" class="dishGrid__wrapper">
        
        
        
        
        
        
      </div>
    </div>
  </section>
  <!-- End Top Dishes -->
  <!-- Breakfast Dishes -->
  <!-- ໜ້າ2 -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title" style="font-family: saysettha ot;">
        Hmong traditional clothes(Girl) (ຊຸດມົ້ງແບບດັ້ງເດີມສໍາລັບຜູ້ຍິງ)
      </h2>
      <div id="Productlist2" class="dishGrid__wrapper">
        
      </div>
    </div>
  </section>
  <!-- End Breakfast Dishes -->
  <!-- Lunch Dishes -->
  <!-- ໜ້າ3 -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title" style="font-family: saysettha ot;">
       Tsho khuam hmoob (boy) (ຊຸດສາກົນມົ້ງສໍາລັດຜູ້ຊາຍ)
      </h2>
      <div id="Productlist3" class="dishGrid__wrapper">
        
      </div>
    </div>
  </section>
  <!-- End Lunch Dishes -->
  <!-- Dinner Dishes -->
  <!-- ໜ້າ4 -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title" style="font-family: saysettha ot;">
        Kaus moom hmoob (ໝວກມົ້ງ)
      </h2>
      <div id="Productlist4" class="dishGrid__wrapper">
        
      </div>
    </div>
  </section>
  <!-- modal1 -->
  <div id="modalDesc" class="modal" style="display: none;">
    <div onclick="coloseModal()" class="modal-bg"></div>
      <div class="modal-page">
        <h1 style="font-size: 1.5vw;">Detail</h1><br>
          <div class="modaldesc-content">
            <img id="mdd-img" class="modaldesc-img" src="./image/sis.jpg" alt="food img"><br><br>
             <div class="modaldesc-detail">
              <p id="mdd-name" style="font-size: 1.5vw;">Kaus moom </p>
              <br>
              <h1 id="mdd-price" style="font-size: 2vw;">$12</h1>
              <div class="ourSpecials__item__stars">
                <img src="./images/3star.png" alt="3 stars">
              </div>
              <div class="btn-control"><br><br><br><br>
                <button onclick="coloseModal()" class="btn">
                  Close
                </button>
                <button onclick="addtocart()" class="btn btn-buy">
                  Add to cart
                </button>
              </div>
             </div>
          </div>
      </div>
  </div>
  
<!-- modal2 cart -->
<div id="modalCart" class="modal" style="display: none;">
  <div onclick="coloseModal()" class="modal-bg"></div>
    <div class="modal-page">
      <h1 style="font-size: 2vw;">My cart</h1><br>
          <div id="mycart" class="cartlist">
              
          </div>
              <div class="btn-control">
                <button onclick="coloseModal()" class="btn">
                  Cancel
                </button>
                <button onclick="buynow()" class="btn btn-buy">
                  Buy
                </button>
              </div>
          
    </div>
</div>
  
  <!-- End Dinner Dishes -->
 <!-- Footer -->
 <footer>
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__col1">
        <div class="footer__logo">
          <img src="./image/LOGO.svg">
        </div>
        <p class="footer__desc">
          The Hmong Traditional Clothing would like to thank the following people who contributed their time to support this project.
        </p>
        <div class="footer__socials">
          <h4 class="footer__socials__title">Follow us</h4>
          <ol class="footer__socials__list">
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-facebook">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-instagram">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-twitter">
                  <path
                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                </svg>
              </a>
            </li>
          </ol>
        </div>
      </div>
      <div class="footer__col2">
        <h3 class="footer__text__title">
          Links
        </h3>
        <ol class="footer__text">
          <li>
            <a href="/user_page.php">Home</a>
          </li>
          <li>
            <a href="./menu.php">Clothing Products</a>
          </li>
          <li>
            <a href="./booking.php">Select Order</a>
          </li>
          <li>
            <a href="./about.php">About Us</a>
          </li>
          <li>
            <a href="./contact.php">contact Us</a>
          </li>
          <li>
            <a href="#">Privacy Policy</a>
          </li>
        </ol>
      </div>
      <div class="footer__col3">
        <h3 class="footer__text__title">
          Support
        </h3>
        <ol class="footer__text">
          <li>
            <a href="#">Contact</a>
          </li>
          <li>
            <a href="#">Support Center</a>
          </li>
          <li>
            <a href="#">Feedback</a>
          </li>
        </ol>
      </div>
      <div class="footer__col4">
        <h3 class="footer__text__title">
          Contact
        </h3>
        <ol class="footer__text">
          <li>
            <a href="#">+8562023837929</a>
          </li>
          <li>
            <a href="#">koobpsv@gamil.com</a>
          </li>
          <li>
            <a href="#">LAO, XiengKhuang Province , Yone Village</a>
          </li>
        </ol>
      </div>
    </div>
  </div>
</footer>
<div id="copyright">
  <div class="container">
    <p class="copyright__text">
      ©  2022 Hmong Traditional Clothing
    </p>
  </div>
</div>
<!-- End Footer -->

<!-- aos script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- custom script -->
<script src="./main.js"></script>
</body>

</html>