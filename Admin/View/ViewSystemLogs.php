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
 
 <style>
       div.scroll {
  padding:4px;
  background-color: #ffffff;
  width: 1530px;
  height: 390px;
  overflow-x: hidden;
  overflow-y: auto;
  text-align:justify;
  line-height: 40px;
  color: #0d0d0d;
 /* border: 1px solid #000;*/
  text-align: center;
  margin-top: 41px;
}

 </style>
<body>
    <div id="header">
        The Catholic University Of Eastern Africa | CUEA
    </div>
       <b>  Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?></b> || Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?> <a href='../Login/logout.php'>Logout</a><br/>

        <br/>
        <a href='../../index.php'>Home</a> || 
        <a href='../add/AddNextKin.php'>Add Next Kin</a> || 
        <a href='ViewNextKin.php'>View Next Kin</a> || 
        <a href='../add/AddNextKinDisplay.php'>Update Next Kin</a> || 
        <a href='../add/addstaff.php'>Add Staff</a> || 
        <a href='../add/AddStaffDisplay.php'>Update Staff</a> || 
        <a href='ViewStaff.php'>View Staff</a> || 
        <a href='../add/addstudent.php'>Add Students</a> || 
        <a href='../add/AddStudentDisplay.php'>Update Student</a> || 
        <a href='../../reports/resultsStudents.php'>View Student</a> || 
        <a href='../../reports/resultsLogedIN.php'>View Users</a> || 
        <a href='../../login/Logout.php'> Logout</a> || 

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
">View System Logs Information</h3>

   <div id="subcontainer8">       
                           <div class="scroll">
        <table style="
    background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 21px;
    font-size: 15px;
    margin-left: 350px;
    ">
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 30px;
        "> 
     
            <td 
            style="width: 70px;"
            ># </td> 
            <td
            style="width: 120px;"
            >User ID</td> 
            <td
            style="width: 110px;"
            >Name</td> 
            <td
            style="width: 310px;"
            >Action Taken</td> 
            <td
            style="width:210px;"
            >Created</td> 
</tr>
<?php

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

$sql="SELECT A.*, B. `username` as f1 FROM logs as A 

LEFT JOIN `users` as B on A.`id` = B.`id`";
$records=mysqli_query($link,$sql);
while ($row=mysqli_fetch_assoc($records)){

  echo "<tr>";
  
            echo "<td>".$row['logsID']."</td>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['f1']."</td>"; 
            echo "<td>".$row['activity']."</td>";     
            echo "<td>".$row['logscreated']."</td>";     
  echo "</tr>";
} // end while

?>
</table>
</div>

    <div id="footer">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>