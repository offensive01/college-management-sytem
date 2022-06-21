<?php
// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: ../login/login.php');
}
?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <a href='../index.php'>Home</a> || 
        <a href='../admin/add/addstudent.php'>Add Students</a> || 
        <a href='resultsStudents.php'>View Student</a> || 
        <a href='../admin/add/AddStudentDisplay.php'>Update Student</a> || 
        <a href='../admin/add/addstaff.php'>Add Staff</a> || 
        <a href='../admin/add/AddStaffDisplay.php'>Update Staff</a> || 
        <a href='../admin/View/ViewStaff.php'>View Staff</a> || 
        <a href='resultsLogedIN.php'>View Users</a> || 
        <a href='../login/Logout.php'> Logout</a> || 

        <br/><br/>
<h2 style="
    text-align: center;
    color: red;
    size: 30px;
">Student Information</h2>
<h3 style="
    text-align: center;
    color: #000;
    size: 30px;
">Students Personal Information</h3>
   <div id="subcontainer8">       
                           <div class="scroll">
        <table style="background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 30px;
    font-size: 15px;
    margin-left: 40px;
    ">
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 30px;
    line-height: 45px;
        "> 
     
            <td 
            style="width: 70px;"
            ># </td> 
            <td
            style="width: 50px;"
            > ID</td> 
            <td
            style="width: "
            >First name</td> 
            <td
            style="width: "
            >Last name</td> 
            <td
            style="width: 150px;"
            >Date of Birth</td> 
            <td
            style="width: 80px;"
            >Status</td> 
            <td
            style="width: 180px;"
            >Phone number</td> 
            <td
            style="width: 200px;"
            >Address</td> 
            <td
            style="width: 70px;"
            >Gender</td> 
            <td
            style="width: 120px;"
            >Nationality</td> 
            <td
            style="width: 200px;"
            >Date Created</td> 
</tr>
<?php

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

$sql="SELECT * FROM student";
$records=mysqli_query($link,$sql);
while ($row=mysqli_fetch_assoc($records)){

  echo "<tr>";
  
            echo "<td>".$row['studentID']."</td>"; 
            echo "<td>".$row['nationalID']."</td>"; 
            echo "<td>".$row['firsname']."</td>"; 
            echo "<td>".$row['lastname']."</td>";     
            echo "<td>".$row['dob']."</td>";     
            echo "<td>".$row['status']."</td>";     
            echo "<td>".$row['phone']."</td>";     
            echo "<td>".$row['address']."</td>";     
            echo "<td>".$row['gender']."</td>";     
            echo "<td>".$row['nationality']."</td>";       
            echo "<td>".$row['created']."</td>";      
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