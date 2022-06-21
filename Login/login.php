<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:  ../Admin/homeDash.php");
    exit;
}

$db_user = "root";
$db_pass = "";
$db_name = "mangalaregistration";

$db = new PDO('mysql:host=localhost; dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
// Processing form data when form is submitted
if(isset($_POST['login'])) {
    
        if(isset($_POST['username']) AND !empty($_POST['username']) AND isset($_POST['password']) AND !empty($_POST['password']))
        {
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
        
            $req = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $req->execute(array($username, $password));
            $user_exist = $req->rowCount();
            if($user_exist == 1)
            {
                $user = $req->fetch();
                if($user['status']) {
                    
//                    $_SESSION['auth'] = $user;
                    $_SESSION["loggedin"] = true;                       $_SESSION["id"] = $user['id'];
                    $_SESSION["username"] = $user['username'];                                                                      // Redirect user to welcome page
                    header("location: ../Admin/homeDash.php");
                    
                } else {
                    $error = "Your account is not yet activated, Kindly Contact the Super Admin";
                }
            }
            else
            {
                $error = "Username or password incorrect !";
                
            }
        }
        else
        { 
            $error = "All the field are required !";
        }
    
}
 
//    // Check if username is empty
//    if(empty(trim($_POST["username"]))){
//        $username_err = "Please enter username.";
//    } else{
//        $username = trim($_POST["username"]);
//    }
//    
//    // Check if password is empty
//    if(empty(trim($_POST["password"]))){
//        $password_err = "Please enter your password.";
//    } else{
//        $password = trim($_POST["password"]);
//    }
//    
//    // Validate credentials
//    if(empty($username_err) && empty($password_err)){
//        // Prepare a select statement
//        $sql = "SELECT id, username, password FROM users WHERE username = ?";
//        
//        if($stmt = mysqli_prepare($link, $sql)){
//            // Bind variables to the prepared statement as parameters
//            mysqli_stmt_bind_param($stmt, "s", $param_username);
//            
//            // Set parameters
//            $param_username = $username;
//            
//            // Attempt to execute the prepared statement
//            if(mysqli_stmt_execute($stmt)){
//                // Store result
//                mysqli_stmt_store_result($stmt);
//                
//                // Check if username exists, if yes then verify password
//                if(mysqli_stmt_num_rows($stmt) == 1){                    
//                    // Bind result variables
//                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
//                    if(mysqli_stmt_fetch($stmt)){
//                        if(password_verify($password, $hashed_password)){
//                            // Password is correct, so start a new session
//                            session_start();
//                            
//                            // Store data in session variables
//                            $_SESSION["loggedin"] = true;
//                            $_SESSION["id"] = $id;
//                            $_SESSION["username"] = $username;                  
//                            
//                            // Redirect user to welcome page
//                            header("location: ../Admin/homeDash.php");
//                        } else{
//                            // Password is not valid, display a generic error message
//                            $login_err = "Invalid username or password.";
//                        }
//                    }
//                } else{
//                    // Username doesn't exist, display a generic error message
//                    $login_err = "Invalid username or password.";
//                }
//            } else{
//                echo "Oops! Something went wrong. Please try again later.";
//            }
//
//            // Close statement
//            mysqli_stmt_close($stmt);
//        }
//    }
//    
//    // Close connection
//    mysqli_close($link);
//}
?>
 


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../Reports/css/style.css">
</head>

School Management Systems (Online Admission)
<head>
    <title>School Management</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
 
<body>
    <div id="header">
        The Catholic University Of Eastern Africa | CUEA
    </div>
        Welcome ! <br/>
        <br/>
         <a href='../index.php'>Home</a> || 
         <a href='view.php'>Courses</a> || 
         <a href='view.php'>Faculty</a> || 
         <a href='view.php'>Programs</a> || 
         <a href='view.php'>Contact</a> || 
         <a href='view.php'>Courses</a> || 
         <a href='Login.php'>Login</a> || 
         <a href='register.php'>Register</a>
       <br/><br/>
<h2 style="
    text-align: center;
    color: red;
    margin-top: 40px;
    size: 30px;
">School Management Systems (Online Admission)</h2>
<h3 style="
    text-align: center;
    margin-top: 40px;
    color: #000;
    size: 30px;
">Login / Register Here!</h3>
        <?php 
        if(isset($error) AND !empty($error)){
            echo '<div class="alert alert-danger">' . $error . '</div>';
        }        
        ?>

        <form method="post">
            
        <div class="input-group">
            <label>Enter User Name</label>
                <input type="text" name="username" class="form-control">
        </div>

        <div class="input-group">
            <label>Enter Password</label>
                <input type="password" name="password" class="form-control">
            </div>

        <div class="input-group">
            <button type="submit" class="btn" name="login">
                Login
            </button>
        </div>
            <div>
            <p>Don't have an account? 
                <a href="register.php">Sign Up</a>.</p>
            </div>
        </form>
    <div id="footer"
     style="
    margin-top: 120px;
    ">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://premicemangala.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>