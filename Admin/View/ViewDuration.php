<?php
// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: ../login/login.php');
}
?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../reports/css/style.css">
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
       <b>  Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?></b> || Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?> <a href='../../Login/logout.php'>Logout</a><br/>

        <br/>
        <a href='../../index.php'>Home</a> || 
        <a href='../add/AddDuration.php'>Add Duration </a> || 
        <a href='ViewDuration.php'>View Duration</a> ||
        <a href='../add/addstudent.php'>Add Student</a> ||        
        <a href='../add/AddStudentDisplay.php'>Update Student</a> || 
        <a href='../../reports/resultsStudents.php'>View Student</a> || 
        <a href='../add/addstaff.php'>Add Staff</a> || 
        <a href='../add/AddStaffDisplay.php'>Update Staff</a> || 
        <a href='ViewStaff.php'>View Staff</a> || 
        <a href='../reports/resultsLogedIN.php'>View Users</a> || 
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
">Programs Duration  Information</h3>

   <div id="subcontainer8">        
        <table style="background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 31px;
    font-size: 15px;
    margin-left: 420px;
    ">
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 30px;
        "> 
     
            <td 
            style="width: 30px;"
            >ID </td> 
            <td
            style="width: 125px;"
            >Name</td> 
            <td
            style="width: 225px;"
            >Description</td> 
            <td
            >Years </td> 
            <td
            style="width: 210px;"
            >Date Created</td> 
</tr>
<?php

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

$sql="SELECT * FROM duration";
$records=mysqli_query($link,$sql);
while ($row=mysqli_fetch_assoc($records)){

  echo "<tr>";
  
            echo "<td>".$row['durationID']."</td>"; 
            echo "<td>".$row['durname']."</td>"; 
            echo "<td>".$row['durdescription']."</td>"; 
            echo "<td>".$row['duration']."</td>";     
            echo "<td>".$row['durcreated']."</td>";     
  echo "</tr>";
} // end while

?>
</table>
</div>

    <div id="footer" style="
    margin-top: 60px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>