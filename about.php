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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  
  <!-- Nav Section -->
  <div class="nav">   
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
            <div class="nav__list__wrapper" style="margin-top: 40px;">

              <li><a class="btn primary-btn" href="./user_page.php">Home</a></li>
              <li><a class="btn primary-btn" href="./Clothing Products.php">Order Clothing Products</a></li>
              <li><a class="btn primary-btn" href="./about.php">About</a></li>
              <li><a class="btn primary-btn" href="./contact.php">Contact</a></li>
              <li><a onclick="openCart()" class="btn primary-btn" href="#"><div class="nav-profile-cart">My cart<i class="fas fa-cart-shopping"></i></div></a></li>
              <li><a class="btn primary-btn" href="./login.php">Login</a></li>
              <div id="cartcount" class="cartcount" style="display: none;">
            </div>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  
  <!-- End Nav Section -->
  <!-- Our Story Section -->
  <section id="ourStory" data-aos="fade-up">
    <div class="container">
      <div class="ourStory__wrapper">     
        <div class="ourStory__info">
          <p class="ourStory__subtitle">
            <p class="ourStory__subtitle">
              Nyob zoo ntawm no kuv yog Sunny ! zoo siab nej tuaj pab txhawb nqa Hmong Tradition Clothing 
              <br><br>
              Embracing the Hmong culture became a greater desire after I had my daughters. Once I became a mother, 
              I realized how valuable it is to keep my heritage alive. As I became a career driven professional, 
              my roots became a part of my shadow. It wasn’t my intention to forget, but time slips through your fingers when life happens. 
              Then one day I paused. I thought about the folklores my parents told, the Hmong dress my mother gifted me when I got married,
               the first time I went to the Hmong New Year and I desired the same memories for my daughters too.<br><br>

              As we integrate ourselves into a world of modern technologies and places that are not quite home, the opportunity
              to showcase the Hmong culture became rare. But once in a while even the moon and the sun (lub hli thiab lub hnub), 
              seemingly so different, can be seen under the same sky. This is why I began Hmong Tradition Clothing . At Hmong Tradition Clothing  we are bridging worlds. 
              I quickly discovered that things were changing and morphing due to our surrounding.
                Others may view this as a negative impact on the authenticity of the culture, but I view it as a harmonious compromise between 
                the new world and the old world.<br><br>

              All of this lead me to collaborating with Hmong Sister designs. Hmong Sister has been designing Hmong clothes 
              since 2013 and they do such a great job preserving Hmong artistry, with a modern twist. In early 2019, 
              I began the artist collaboration efforts. We have many talented Hmong brothers and sisters in the community. 
              I want to build a platform for them to explore their creative self and by challenging them to capture the different influences around us. This collaboration is unique because each sale that Hnub & Hli makes, the artist will receive a share of the proceeds.
<br><br>
              The future holds many great things and I’m excited to charge forward. Thanks for reading my story.
                        </p>
                        <section id="discount" data-aos="fade-up">
                          <div class="container">
                            <div class="discount__wrapper">
                              <div class="discount__images">
                                <div class="discount__img1">
                                  <img src="./image/hmong_history_1.jpg" alt="Food img">
                                </div>
                                <div class="discount__img2">
                                  <img src="./image/bg_topjpg.jpg" alt="Food img">
                                </div>
                                <div class="discount__img3">
                                  <img src="./image/festival_2.jpg" alt="Food img">
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>     
          
          <p class="ourStory__subtitle">
            Giving tradition a fresh lease on life The beautifully embroidered embroidery known as paj ntaub, or flower fabric,
             distinguishes traditional Hmong clothes. Traditional attire is intricate and meticulously crafted, with elaborate 
             pleated skirts for ladies requiring a keen skill to manipulate fabric.... There are three main types of clothing: 
             shirts, pants and dresses.
<br><br>
             The Hmong people were immigrants from China's southwestern province of Guangxi who came to America in the 1970s to 
             escape poverty and political persecution. They settled in several U.S. states including Wisconsin, where they formed 
             communities in the suburbs of Chicago. Although they originally wore clothes similar to those of American Indians, 
             they now dress like other white Americans.
<br>
             In addition to being colorful and stylish, Hmong clothes are functional too. For example, men's shirts have multiple
              buttons down the front so that everyone can get involved in the conversation! Even women's dresses have pockets if 
              you know where to look...
<br><br>
              Traditional Hmong clothes are still made by hand using local materials by members of the Hmong community in Laos and elsewhere. 
              However, mass-manufactured clothes imported from China and exported under the label "Lao Hmong" are also available. These garments
               are very cheap but often made of low quality material and designed for tourists rather than Hmong people who might feel uncomfortable
               wearing them in public.
          </p>
          <p class="ourStory__text">
            Welcome to Shaif's Cuisine. We take pride in delivering warm, friendly service and creating mouth-watering
            culinary delights for all. Using only the freshest locally sourced ingredients, we’ll ensure you have a
            dining
            experience to remember.
            <br><br>
            Since 1998, we are the perfect place for a romantic meal for two, a catch-up with friends, family parties,
            business meetings, and bringing loved ones together. With comfortable surroundings, affordable prices, and
            seating for up to 65 guests, we can cater for all occasions.
          </p>
        </div>
      </div>
    </div>
  </section>
 <!-- Discount Section -->
 <section id="discount" data-aos="fade-up">
  <div class="container">
    <div class="discount__wrapper">
      <div class="discount__images">
        <div class="discount__img1">
          <img src="./image/sis_7.jpg" alt="Food img">
        </div>
        <div class="discount__img2">
          <img src="./image/sis_6.jpg" alt="Food img">
        </div>
        <div class="discount__img3">
          <img src="./image/sis_8.jpg" alt="Food img">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Discount Section -->
  <!-- End Our Story Section -->
  <!-- Our Goals -->
  <section id="ourGoals" data-aos="fade-down">
    <div class="container">
      <div class="ourGoals__info">
        <p class="ourGoals__text">
          Originally, Hmong clothing was made of hemp. The fibers of the hemp stalk are removed, spun into fiber threads,
           and sewn into fabric, making hemp a very important plant. After that, it is bleached and colored black or indigo blue.

        Nowadays, cotton is used instead. It is getting more and more popular among Hmong people because cotton clothes are durable
         and easy to clean.

        Clothing articles for women are usually longer than those for men. Women's pants tend to be around the knee, while men's 
        are usually below the knee. The difference is that women require more material to make the same length because they are 
        generally smaller-framed. Also, women's shirts are usually shorter than men's.

        Hmong people prefer bright colors in their clothes; especially red, white, and blue. These are the colors of Laos, 
        the country where the Hmong people come from.<br><br>

        In conclusion, Hmong clothing is mostly made of cotton with some synthetic materials used for accents like buttons or zippers.
      </div>
      <div class="ourGoals__imgs__wrapper" data-aos="fade-up">
        <div class="ourGoals__img1">
          <img src="./image/sis_5.jpg" alt="kitchen img">
        </div>
        <div class="ourGoals__img2">
          <img src="./image/festival_1.jpg" alt="kitchen img">
        </div>
        <div class="ourGoals__img3">
          <img src="./image/img.png" alt="kitchen img">
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Goals -->
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