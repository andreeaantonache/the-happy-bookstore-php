
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
      function sendCheck(){
        sName = document.getElementById('sender_name').value
        if (sName.length>20){
          confirm("Are you sure your name isn't shorter? CANCEL to enter a shorter name. Press OK to continue.")
        }
      }
    </script>
</head>

<body>
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
            <h5 class="about1"><span class="about2">Where the happy bookstore</span></h5>
            <div><span class="about1"><b>Opening hours:</b> 1.august.2019</span></div>
            <br><span class="about1"><b>Address:</b> Str Florilor De Cires 1996, Iasi</span>
    
            <form action="" target="_blank">
                <p class="message">If you have some recommendations for us, please let us know :D </p>
                <p><input type="text" placeholder="Name" id="sender_name"></p>
                <textarea id="subject" placeholder="Your ideas.." style="height:200px"></textarea>
                <p><button type="submit" onclick="sendCheck()">SEND MESSAGE</button></p>
            </form>
    
            <img src="biblioteca2.jpg" class="responsive" style="width:100%; max-width:1000px;margin-top:32px;">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
  <p>Powered by <a href="#" title="the happy bookstore" target="_blank" class="footer-text">the happy bookstore</a></p>
  <p>
    <i id="iconi" class="fab fa-instagram"></i>
    <i id="icont" class="fab fa-twitter"></i>
    <i id="iconf" class="fab fa-facebook-f"></i>
	<i id="iconp" class="fab fa-pinterest"></i>
   </p> 
</footer>
</body>
</html>
