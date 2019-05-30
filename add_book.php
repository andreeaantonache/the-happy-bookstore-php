<?php
// Include config file
require_once "db_connection.php";
 
// Define variables and initialize with empty values
$book_name = $book_author = "";
$book_name_err = $book_author_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["book_name"]))){
        $book_name_err = "Please enter a book name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id_book FROM book WHERE bookName = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["book_name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $book_name_err = "This book already exists.";
                } else{
                    $book_name = trim($_POST["book_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        if ($stmt)
            mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["book_author"]))){
        $book_author_err = "Please enter a book author.";     
    } else{
        $book_author = trim($_POST["book_author"]);
    }
    
    // Check input errors before inserting in database
    if(empty($book_name_err) && empty($book_author_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO book (bookName, bookAuthor) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $book_name;
            $param_password = $book_author; // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: welcome.php");
            } else{
                echo "Something went wrong. Please try again later.";
               
            }
        }
         
        // Close statement
        if ($stmt)
            mysqli_stmt_close($stmt);
       
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<header class="bgimg" id="home" style="min-height:100%;">
<div>
      <a href='login.php' target ="_self" id = "log"> Log in</a>
      <i class="fas fa-sign-in-alt"></i>   
</div>
  <div class="title-content" style="left:35%;">
    <span class="title" style="font-size:55px;">the<br>happy bookstore</span>
    
  </div>

    <div class="title-content"  style="left:80%; margin-top:30px;">
        <h2  style="color:white; transform: translate(-50%,-50%);">ADD BOOKS</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-register <?php echo (!empty($book_name_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="book_name"  placeholder="Book Name" style="width:250px;" value="<?php echo $book_name; ?>">
                <span class="help-block"><?php echo $book_name_err; ?></span>
            </div>
                <div class="form-register <?php echo (!empty($book_author_err)) ? 'has-error' : ''; ?>">
                    <input type="text" name="book_author"  placeholder="Book Author" style="width:250px;" value="<?php echo $book_author; ?>">
                    <span class="help-block"><?php echo $book_author_err; ?></span>
                </div>
             
            <div class="form-register">
                <input type="submit" style="width:270px;" value="Add" >
          
            </div>
            <p style="color:white; display:inline-block; padding:10px 0;transform:translate(-50%,-50%);width:169%;">Return to home page.<a href="welcome.php" id ="log-register"><b>HOME</b></a>.</p>
        </form>
    </div> 
<header>
</body>
</html>