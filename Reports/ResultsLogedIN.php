<?php
// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: ../login/login.php');
}
?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styleLo.css">
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
       <b>  Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?></b> || Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?> <a href='../Login/logout.php'>Logout</a><br/>

        <br/>
        <a href='../index.php'>Home</a> || 
        <a href='../Login/register.php'>Add New User</a> || 
        <a href='resultsLogedIN.php'>View Users</a> ||
        <a href='../login/Logout.php'> Logout</a> || 

        <br/><br/>
<h2 style="
    text-align: center;
    color: red;
    size: 30px;
">School Management System Online</h2>
<h3 style="
    text-align: center;
    color: #000;
    size: 30px;
">users Information</h3>

   <div id="container">        
        <table style="
    background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 21px;
    font-size: 15px;
    margin-left: 250px;
    ">
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 30px;
        "> 
     
            <td 
            style="width: 50px;"
            ># </td> 
            <td
            style="width: 120px;"
            >User Name</td> 
            <td
            style="width: 300px;"
            >Password</td> 
            <td
            style="width: 205px;"
            >Date of Creation</td> 
</tr>
<?php

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

$sql="SELECT * FROM users";
$records=mysqli_query($link,$sql);
while ($row=mysqli_fetch_assoc($records)){

  echo "<tr>";
  
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['username']."</td>"; 
            echo "<td>".$row['password']."</td>"; 
            echo "<td>".$row['created_at']."</td>";      
  echo "</tr>";
} // end while

?>
</table>
</div>

    <div id="footer" style="
    margin-top: 90px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>