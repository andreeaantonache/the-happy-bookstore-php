<!DOCTYPE html>
<html>
<head>
    <title>thehappybookstore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">      

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1} 
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block"; 
        dots[slideIndex-1].className += " active";
      }

      var slideIndex = 1;

    </script>
    <!--<script type="text/javascript" src="interactive.js"></script>-->

</head>

<body onLoad="showSlides(slideIndex = 1)">
<header class="bgimg" id="home">
<div>
      <a href='login.php' target ="_self" id = "log"> Log in</a>
      <i class="fas fa-sign-in-alt"></i>     
</div>
  <div class="title-content">
    <span class="title" style="font-size:55px">the<br>happy bookstore</span>
    <div class="padding">
      <div class="meniu">
          <a href="index.php" class="home">Home</a>
          <a href="books.php" class="home">Menu Books</a>
          <a href="articles.php" class="home">Articles</a>
          <a href="contact.php" class="home">Contact</a>
      </div>
   </div>
  </div>
</header>
<div class="all-page">
    <div class="container">
    <div style="max-width:700px">
        <h5 class="about1"><span class="about2">CHOOSE from these articles</span></h5>
        <!-- Slideshow container -->
        <div class="slideshow-container">
          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <a href="article1.php" ><img src="Catbook.jpg" style="width:100%"></a>
            <div class="text">Follow the CAT</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <a href="article2.php" ><img src="meeting.jpg" style="width:100%"><a href="article1.php" >
            <div class="text">Mess to MASTERPIECE</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <a href="article3.php" ><img src="meeting2.jpg" style="width:100%"></a>
            <div class="text">Your WRITING could be here</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>

        <!--<img src="meeting2.jpg" class="responsive" style="width:100%; max-width:1000px;margin-top:32px;">-->
    </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
  <p>Powered by <a href="index.php" title="the happy bookstore" target="_blank" class="footer-text">the happy bookstore</a></p>
</footer>
</body>
</html>
