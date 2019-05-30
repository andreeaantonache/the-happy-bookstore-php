
<?php
// Include config file
require_once "db_connection.php";
 $query = "SELECT style, count(*) as number FROM book GROUP BY style";
 $result = mysqli_query($conn, $query);
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
  
    <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Style', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["style"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'the happy bookstore STYLE',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
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
    <span class="title" style="font-size:55px;">the<br>happy bookstore</span>
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
            <h5 class="about1"><span class="about2">The bookstore STYLE</span></h5>
            <p><i>there are soo many books, </i>yes, we all know this. Still there are a few basic books you must read. Here at our happy bookstore, we <b>have</b> them.</p>
            <p>In addition to our full passion of books, we have different styles of <b>BOOKS</b> that you MUST approach.</p>
            <div id="piechart" style="width: 600px; height: 400px; margin-left:20px;"></div>
			
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
