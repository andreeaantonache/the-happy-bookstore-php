<?php
    /*
    $dbhost will be the host where the server is running it is usually localhost.
    $dbuser will be the username i.e. root
    $dbpass will be the password which is the same that you used to access your phpmyadmin.
    $dbname will be the name of your database created - thehappybookstore
    */
  
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'password';
        $db = 'thehappybookstore';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
     
        
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
       
   
?>