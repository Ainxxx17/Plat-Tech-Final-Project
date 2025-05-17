<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="logo1.png" type="image/svg+xml">
    <title>Hateza Travel and Tours | Home</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">
            <img src="logo1.png" alt="logo" />
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#tour">TOUR</a></li>
        <li><a href="#package">PACKAGE</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="book.php">BOOK TRIP</a></li>
      </ul>
      <div class="nav__btns">
        <button class="btn"><a href = "book.php" style = "color:  #f3f4f6;">BOOK TRIP</button></a>
      </div>
    </nav>

    <header id="home">
      <div class="header__container">
        <div class="header__content">
          <p>EXPLORE THE WORLD WITH EASE AND JOY</p>
          <h1>Explore the world with our flight!</h1>
          <div class="header__btns">
            <button class="btn">Book A Trip Now</button>
            <a href="book.php">
              <span><i class="ri-play-circle-fill"></i></span>
            </a>
          </div>
        </div>
        <div class="video-background-wrapper">
          <video autoplay muted loop playsinline class="video-background">
            <source src="vid.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
        <!--<div class="header__image">
          <img src="header.png" alt="header" />
        </div>-->
      </div>
    </header>

    <section class="section__container plan__container">
      <h2 class="section__header">Our Work So Far ᯓ ✈︎</h2>
      <p class="description">
        At Hateza Travel and Tours, we've been dedicated to delivering seamless, personalized travel experiences that turn every journey into a memorable adventure.
      </p>
      <div class="plan__grid">
        <div class="plan__content">
          <span class="number">01</span>
          <h4>Successful Trips Organized</h4>
          <p>
            Witness the architectural marvels and bustling streets from bird's-eye view, offering a unique perspective.
          </p>
          <span class="number">02</span>
          <h4>Client Satisfaction</h4>
          <p>
            85 % customer satisfaction rate, with glowing reviews and repeat clients. Specialized packages for honeymoons, group tours, and corporate retreats.
          </p>
          <span class="number">03</span>
          <h4>Partnerships and Collaborations</h4>
          <p>
            Partnered with hotels, airlines, and local tour operators worldwide. Collaborated on special events and travel campaigns.
          </p>
        </div>
        <div class="plan__image">
          <img src="trip.jpg" alt="plan" />
          <img src="satisfaction.jpg" alt="plan" />
          <img src="partnership.jpg" alt="plan" />
        </div>
      </div>
    </section>

    <section class="section__container destination__container" id="about">
      <h2 class="section__header">Top Travel Spot ⁀જ✈︎</h2>
      <p class="section__description">
        Discover the world’s most cherished destinations, where unforgettable beauty, culture, and adventure come together to capture the hearts of travelers everywhere.
      </p>
      <div class="destination__grid">
        <div class="destination__card">
          <img src="london.jpg" alt="destination" />
          <div class="destination__card__details">
            <div>
              <h4>The Royal Capital</h4>
              <p>London, United Kingdom</p>
            </div>
            <div class="destination__rating">
              <span><i class="ri-star-fill"></i></span>
              4.7
            </div>
          </div>
        </div>
        <div class="destination__card">
          <img src="tokyo.jpg" alt="destination" />
          <div class="destination__card__details">
            <div>
              <h4>The Neon Metropoliss</h4>
              <p>Tokyo, Japan</p>
            </div>
            <div class="destination__rating">
              <span><i class="ri-star-fill"></i></span>
              4.5
            </div>
          </div>
        </div>
        <div class="destination__card">
          <img src="thai.jpg" alt="destination" />
          <div class="destination__card__details">
            <div>
              <h4>The City of Angels</h4>
              <p>Bangkok, Thailand</p>
            </div>
            <div class="destination__rating">
              <span><i class="ri-star-fill"></i></span>
              4.8
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container tour__container" id="tour">
      <h2 class="section__header">Pick A Tour Type 🛩</h2>
      <div class="tour__grid">
        <div class="tour__card">
          <img src="forest.jpg" alt="tour" />
          <h4>Forest Adventures</h4>
          <p>15 Tours+</p>
        </div>
        <div class="tour__card">
          <img src="mountain.jpg" alt="tour" />
          <h4>Mountain Climbing</h4>
          <p>10 Tours+</p>
        </div>
        <div class="tour__card">
          <img src="beach.jpg" alt="tour" />
          <h4>Beach Vacations</h4>
          <p>18 Tours+</p>
        </div>
        <div class="tour__card">
          <img src="city.jpg" alt="tour" />
          <h4>City Tours</h4>
          <p>12 Tours+</p>
        </div>
      </div>
      <div class="tour__btn">
        <button class="btn">
          Show All
          <span><i class="ri-arrow-right-long-line"></i></span>
        </button>
      </div>
    </section>

    <section class="section__container journey__container" id="tour">
      <h2 class="section__header">Journey To The Sky Made Simple ⌯⌲</h2>
      <p class="section__description">
        Effortless Planning for Your Next Adventure
      </p>
      <div class="journey__grid">
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-bookmark-3-line"></i></span>
            <h4>Seamless Booking Process</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-bookmark-3-line"></i></span>
            <h4>Easy Reservations, One Click Away</h4>
            <p>
              From flights and accommodations to activities and transfers,
              everything you need is available at your fingertips, making travel
              planning effortless.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-landscape-fill"></i></span>
            <h4>Tailored Itineraries</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-landscape-fill"></i></span>
            <h4>Customized Plans Just for You</h4>
            <p>
              Enjoy personalized travel plans designed to match your preferences
              and interests. Whether you seek adventure or cultural immersion,
              our tailored itineraries ensure your journey is uniquely yours.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-map-2-line"></i></span>
            <h4>Expert Local Insights</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-map-2-line"></i></span>
            <h4>Insider Tips and Recommendations</h4>
            <p>
              We provide curated recommendations for dining, sightseeing, and
              hidden gems, so you can experience each destination like a local.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container showcase__container" id="package">
      <div class="showcase__image">
        <img src="shw.jpg" alt="showcase" />
      </div>
      <div class="showcase__content">
        <h4>IGNITE YOUR JOURNEY WITH HATEZA!</h4>
        <p>
          At Hateza Travel and Tours, we don’t just take you places—we take you beyond. Whether you’re chasing sunsets on tropical beaches, exploring vibrant cityscapes, or discovering the charm of hidden destinations, we’re here to make every journey unforgettable. Our goal is to turn every itinerary into a story worth telling.
        </p>
        <p>
          With a passion for exploration and a commitment to exceptional service, Hateza brings the world to your doorstep. We specialize in crafting personalized travel experiences tailored to your style, pace, and dreams—so you can travel with ease, confidence, and a touch of magic.
        </p>
        <div class="showcase__btn">
        <button class="btn" >
        <a href = "book.php" style="color: white;">Book A Flight Now</a>
            <span><i class="ri-arrow-right-line" style="color: white;"></i></span>
          </button>
        </div>
      </div>
    </section>

    <section class="section__container banner__container">
      <div class="banner__card">
        <h4>10+</h4>
        <p>Years Experience</p>
      </div>
      <div class="banner__card">
        <h4>12K</h4>
        <p>Happy Clients</p>
      </div>
      <div class="banner__card">
        <h4>4.8</h4>
        <p>Overall Ratings</p>
      </div>
    </section>

    <section class="section__container discover__container">
      <h2 class="section__header">Discover The World From Above 🗺 </h2>
      <p class="section__description">
        Experience Breathtaking Views and Unique Perspectives
      </p>
      <div class="discover__grid">
        <div class="discover__card">
          <span><i class="ri-camera-lens-line"></i></span>
          <h4>Aerial Cityscapes</h4>
          <p>
            Witness the architectural marvels and bustling streets from
            bird's-eye view, offering a unique perspective.
          </p>
        </div>
        <div class="discover__card">
          <span><i class="ri-ship-line"></i></span>
          <h4>Coastal Wonders</h4>
          <p>
            Fly over pristine coastlines and turquoise waters, revealing hidden
            coves and vibrant coral reefs.
          </p>
        </div>
        <div class="discover__card">
          <span><i class="ri-landscape-line"></i></span>
          <h4>Historic Landmarks</h4>
          <p>
            Observe the grandeur of ancient castles and other significant sites
            in a way that ground tours can't offer.
          </p>
        </div>
      </div>
    </section>

    <section class="banner">
      <div class="banner__wrapper">
        <img src="banner-1.jpg" alt="banner" />
        <img src="banner-2.jpg" alt="banner" />
        <img src="banner-3.jpg" alt="banner" />
        <img src="banner-4.jpg" alt="banner" />
        <img src="banner-5.jpg" alt="banner" />
        <img src="banner-6.jpg" alt="banner" />
        <img src="banner-7.jpg" alt="banner" />
        <img src="banner-8.jpg" alt="banner" />
      </div>
    </section>

    <section class="section__container review__container">
      <div class="review__image">
        <img src="review.png" alt="review" />
      </div>
      <div class="review__content">
        <h2 class="section__header">Our Valuable Clients Say Abour Us</h2>
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="review__card">
                <span><i class="ri-double-quotes-l"></i></span>
                <p class="section__description">
                  Hateza made everything seamless—from booking to exploring. Every detail was perfect, and I felt cared for the entire journey.
                </p>
                <h4>Ezekiel Manalo</h4>
                <h5>Travel Blogger</h5>
                <div>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
              </div>
            </div>
           
            <div class="swiper-slide">
              <div class="review__card">
                <span><i class="ri-double-quotes-l"></i></span>
                <p class="section__description">
                  From hidden gems to top attractions, Hateza curated an experience I never could’ve planned myself. 10/10 recommend!
                </p>
                <h4>Reimar Gutierrez</h4>
                <h5>Photographer</h5>
                <div>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="review__card">
                <span><i class="ri-double-quotes-l"></i></span>
                <p class="section__description">
                  Every moment felt like a dream. Hateza’s attention to detail and warm customer care made our honeymoon magical.
                </p>
                <h4>Lanze Malacas</h4>
                <h5>Business Consultant</h5>
                <div>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="review__card">
                <span><i class="ri-double-quotes-l"></i></span>
                <p class="section__description">
                  This is my second trip with Hateza and it just keeps getting better. They make traveling feel effortless and exciting.
                </p>
                <h4>Charlze Boneo</h4>
                <h5>Business Consultant</h5>
                <div>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="nav__logo">
            <a href="#">
              <img src="logo1.png" alt="logo" />
            </a>
          </div>
          <p>
            Explore the world with ease and excitement through our comprehensive
            travel platform. Your journey begins here, where seamless planning
            meets unforgettable experiences.
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-youtube-line"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Flights</a></li>
            <li><a href="#">Hotels</a></li>
            <li><a href="#">Cruise</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <ul class="footer__links">
            <li>
              <a href="#">
                <span><i class="ri-phone-fill"></i></span> +63 930-781-0612
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-record-mail-line"></i></span> info@hatezatravelandtours
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-map-pin-2-fill"></i></span> Bulacan, Philippines 3023
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Subscribe</h4>
          <form action="/">
            <input type="text" placeholder="Enter your email" />
            <button class="btn">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="footer__bar">
        © 2025 Hateza Travel and Tours | All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>