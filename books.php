
<?php
// Include config file
require_once "db_connection.php";
?> 


<!DOCTYPE html>
<html>
<head>
    <title>thehappybookstore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header class="bgimg" id="home">
<div>
      <a href='login.php' target ="_blank" id = "log"> Log in</a>
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
            <h5 class="about1"><span class="about2">TOP 20 Books YOU must Read</span></h5>
            <p><i>there are soo many books, </i>yes, we all know this. Still there are a few basic books you must read. Here at our happy bookstore, we <b>have</b> them.</p>
            <p>In addition to our full passion of books, we recomand <b>20 BOOKS</b> that you MUST HAVE in your cosmos library and READ them.</p>
            <div class="qoute">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th >Books Title</th>
                            <th>Author</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    mysqli_select_db($conn,"thehappybookstore");
                    $books = mysqli_query($conn, "SELECT * FROM book");
                    while($row =mysqli_fetch_array($books))
                    {
                    ?>
                        <tr>
                            <td><?php echo $row['id_book']?></td>
                            <td><?php echo $row['bookName']?></td>
                            <td><?php echo $row['bookAuthor']?></td>
                        </tr>
            <?php } ?>
                    </tbody>
                </table>	
			</div>
			<!--<a href="menubooks2.html" class="home next">Add book</a>-->
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
  <p>Powered by <a href="index.php" title="the happy bookstore" target="_blank" class="footer-text">the happy bookstore</a></p>
</footer>
</body>
</html>
