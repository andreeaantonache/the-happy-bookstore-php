<?php
    //initialize the session
    session_start();

    //check if the user is already logged in, if yes then redirect
    //him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
    {
        header("location:welcome.php");
        exit;
    }

    //include  config file with db connection
    require_once "db_connection.php";

    //define variables & initialize with empty values
    $username = $password ="";
    $username_err = $password_err="";

    //processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //check if username is empty
        if(empty(trim($_POST["username"])))
        {
            $username_err = "Please enter username.";

        }
        else
        {
            $username = trim($_POST["username"]);
        }

        //check if password is empty
        if(empty(trim($_POST["password"])))
        {
            $password_err = "Please enter your password.";

        }
        else
        {
            $password = trim($_POST["password"]);
        }

        //validate credentials
        if(empty($username_err) && empty($password_err))
        {
            //prepare a select statement
            $querry = "SELECT id, username, password FROM user WHERE username = ?";
            if ($stmt = mysqli_prepare($conn, $querry))
            {
                //bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                //set parametes
                $param_username = $username;

                //attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt))
                {
                    //store result
                    mysqli_stmt_store_result($stmt);
                    //check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                           // if(password_verify($password, $hashed_password)){
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                            
                                
                                // Redirect user to welcome page
                                header("location:welcome.php");
                            //} else{
                                // Display an error message if password is not valid
                                $password_err = "The password you entered was not valid.";
                            //}
                        }
                    } 
                    else
                    {
                        // Display an error message if username doesn't exist
                        $username_err = "No account found with that username.";
                    }
                } 
                else
                {
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
    // Close connection
    mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang = "en">
<head>
  <title>thehappybookstore</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 
</head>

<body>
<header class="bgimg" id="home" style="min-height:100%;">

    <div class="title-content" style="left:35%;">
        <span class="title" style="font-size:55px"><a href="index.php" id="redirect-home"><p id="title-home">the<br>happy bookstore</p></a></span>
    </div>
    <div class="title-content" style="left:75%; margin-top:30px;">
			<h2 clas="about1" style="color:white; transform: translate(-50%,-50%);"><b>LOG IN</b></h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <span id="span-log"><?php echo $username_err; ?></span>
                <div class ="form-log <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <input type="text" name = "username" value="<?php echo $username; ?>" placeholder="Username">
                </div>
                <span id="span-log"><?php echo $password_err; ?></span>
                <div class = "form-log <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">      
                    <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
                </div> 
                <div class="form-log">
                    <input type="submit" value="Login" style="width:169px;">
                </div>
			        <a href="index.php" style="color:white; display:inline-block; padding:10px 0;transform:translate(-50%,-50%);width:169%;">Forgot password?</a>
            </form>
        
    </div>
</header>
</body>
</html>