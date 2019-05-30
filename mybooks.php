<?php
// Include config file
require_once "db_connection.php";
?> 


<html>
<head>
  <title>thehappybookstore</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
<header class="bgimg" id="home">
<div>
      <a href='logout.php' target ="_self" id = "log"> Log out</a>
     <!-- <i class="fas fa-sign-in-alt"></i>-->     
</div>
  <div class="title-content">
    <span class="title" style="font-size:55px">the<br>happy bookstore</span>
    <div class="padding">
      <div class="meniu">
          <a href="welcome.php" class="home">Home</a>
          <a href="mybooks.php" class="home">My Books</a>
      </div>
   </div>
  </div>
</header>
<!--<div class="all-page">
  <div class="container">
    <div style="max-width:700px">
      <h5 class="about1"><span class="about2">MY COSMOS LIBRARY</span></h5>
      <div class="table">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
            <p>
                <label>Book Name:</label>
                <input type="text" name="book_name" id="book_name">
            </p>
            <p>
                <label>Book Author:</label>
                <input type="text" name="book_author" id="book_author">
            </p>
            <input type="submit" value="Add Book">
          </form>
        </div>
--> 
<div class="all-page">
    <div class="container">
        <div style="max-width:700px">
            <h5 class="about1"><span class="about2">TOP Books YOU Have To Read</span></h5>
            <p><i>there are soo many books, </i>yes, we all know this. Still there are a few basic books you must read.<p>
            <p>Here at our happy bookstore, we <b>propose</b> to you this menu of books, but you can <i>add</i> your own books or <i>delete</i> the current books.</p>
        
			<!--<a href="menubooks2.html" class="home next">Add book</a>-->
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="footer">
  <p>Powered by <a href="welcome.php" title="the happy bookstore" target="_blank" class="footer-text">the happy bookstore</a></p>
</footer>
</body>
</html>