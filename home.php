<!DOCTYPE html>
 <html lang="ja">
  <head>
   <meta charset="UTF-8">
   <title>Tennis Academy E-shop</title>
   <meta name="description" content="当サイトは本アカデミーの公式物品販売サイトです。">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/00f67a9916.js" crossorigin="anonymous"></script>
   <link href="slick/slick.css" rel="stylesheet" />
   <link href="slick/slick-theme.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <!--- all image from https://unsplash.com/s/photos/tennis --->
    <header>
        <div class="header-upper">
          <img class="header-logo" src="images/TennisAcadmy_logo.png">
          <i class="fab fa-facebook-square header-icon sns-icon"></i>
          <i class="fab fa-twitter-square header-icon sns-icon"></i>
          <form class="header-icon" action="localhost/TennisAcady_eshop" method="get">
            <input type="search" name="search" placeholder="キーワードを入力">
            <input type="submit" name="submit" value="検索">
          </form>
        </div>
        <div class="header-below">
          <div class="header-container">
            <a class="header-option">NEWS</a>
            <a class="header-option">PRODUCTS</a>
            <a class="header-option">PLAYERS</a>
            <a class="header-option">VIDEOS</a>
          </div>
        </div>
    </header>
      <div class="top-slide">
        <img class="slide" src="images/tennisWideImage6.jpg" alt="slide1">
        <img class="slide" src="images/tennisWideImage7.jpg" alt="slide2">
        <img class="slide" src="images/tennisWideImage8.jpg" alt="slide3">     
      </div>
    <div class="news-wrapper">
      <div class="container">
        <h2 class="news-title">NEWS</h2>
        <div class="top-news">
          <div class="news news1">
            <div class="news-backgroundColor"></div>
            <p class="news-description">description1</p>
            <div class="news-date">
              <p class="day">31</p>
              <p class="month">Mar.</p>
            </div>
            <div class="news-event">
              <p>celemony</p>
            </div>
          </div>
          <div class="news news2">
            <div class="news-backgroundColor"></div>
            <p class="news-description">description2</p>
            <div class="news-date">
              <p class="day">01</p>
              <p class="month">Feb.</p>
            </div>
            <div class="news-event">
              <p>tournament</p>
            </div>
          </div>
          <div class="news news3">
            <div class="news-backgroundColor"></div>
            <p class="news-description">description3</p>
            <div class="news-date">
              <p class="day">02</p>
              <p class="month">Jan.</p>
            </div>
            <div class="news-event">
              <p>match</p>
            </div>
          </div>
          <div class="news news4">
            <div class="news-backgroundColor"></div>
            <p class="news-description">description4</p>
            <div class="news-date">
              <p class="day">03</p>
              <p class="month">Dec.</p>
            </div>
            <div class="news-event">
              <p>event</p>
            </div>
          </div>
          <div class="news news5">
            <div class="news-backgroundColor"></div>
            <p class="news-description">description5</p>
            <div class="news-date">
              <p class="day">04</p>
              <p class="month">Nov.</p>
            </div>
            <div class="news-event">
              <p>festival</p>
            </div>
          </div>
        </div>
        <a class="news-button">VIEW ALL &rtrif;</a>
      </div>
    </div>
    <!--- create two wrappers, and when clicking the button, switch the html by using the click function etc.
          of js --->
    <div class="products-wrapper-hidden">
      <div class="container">
        <h3 class="products-title">PRODUCTS</h3>
        <div class="products-top">
          <div class="product">
            <img src="./images/productRacket.jpg" alt="racket">
            <a class="product-name">Racket</a>
          </div>
          <div class="product">
            <img src="./images/productBall.jpg" alt="ball">
            <a class="product-name">Ball</a>
          </div>
          <div class="product">
            <img src="./images/productShoes.jpg" alt="shoes">
            <a class="product-name">Shoes</a>
          </div>
          <div class="product">
            <img src="./images/productWear.jpg" alt="wear">
            <a class="product-name">Wear</a>
          </div>
          <div class="product">
            <img src="./images/productCourt.jpg" alt="court">
            <a class="product-name">Court</a>
          </div>
          <div class="product">
            <img src="./images/productOthers.jpg" alt="others">
            <a class="product-name">Others</a>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
      </div>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/script.js"></script>
  </body>
 </html>