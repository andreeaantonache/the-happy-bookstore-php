<?php
// Initialize the session
// Include config file
require_once "db_connection.php";
session_start();
 
$username = $_SESSION["username"];
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    
    exit;
}

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
      <i class="fas fa-sign-out-alt"></i>     
</div>
  <div class="title-content">
    <span class="title" style="font-size:55px">the<br>happy bookstore</span>
    <div class="padding">
      <div class="meniu">
          <a href="welcome.php" class="home">Home</a>
          <a href="add_book.php" class="home">My Books</a>
      </div>
   </div>
  </div>
</header>
<div class="all-page">
  <div class="container">
    <div style="max-width:700px">
      <h5 class="about1"><span class="about2">Hello,<i><?php echo $_SESSION['username'];?></i>!</span></h5>
      <p><i>there are soo many books, </i>yes, we all know this. Still there are a few basic books you must read.<p>
            <p>Here at our happy bookstore, we <b>propose</b> to you this menu of books, but you can <i>add</i> your own books the current books from menu here, <a href="mybooks.php" taget="_self" style="color:green;"><b>My books</b></a> </p>
            <p> You can <i>delete</i> the books.</p>
            <div class="qoute">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th >Books Title</th>
                            <th>Author</th>
                            <th>Delete Book</th>
                        
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
                            <td>
                              <form>
                               <a href='delete.php?id=<?php echo $row['id_book']?>'><center><i class="far fa-trash-alt"></i></center></a>
                              </form>
                            </td>
                              
                        </tr>
            <?php } ?>
                    </tbody>
                </table>	
			</div>
  
  
   
     
      <!--<img src="biblioteca2.jpg" class="responsive" style="width:100%; max-width:1000px;margin-top:32px;">-->
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer">
  <p>Powered by <a href="welcome.php" title="the happy bookstore" target="_blank" class="footer-text">the happy bookstore</a></p>
</footer>
</body>
</html>