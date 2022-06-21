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
       <b>  Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?></b> || Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?> <a href='../../Login/logout.php'>Logout</a><br/>

        <br/>
        <a href='../../index.php'>Home</a> || 
        <a href='../add/AddAdmitStudent.php'>Add Admitted Student </a> || 
        <a href='ViewAdmittedStudent.php'>View Admitted</a> || 
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
">Admitted Students Personal Information</h3>

   <div id="subcontainer8">        
                               <div class="scroll">
        <table style="background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 31px;
    font-size: 15px;
    margin-left: 60px;
    ">
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 45px;
        "> 
     
            <td 
            style="width: 40px;"
            >ID </td> 
            <td
            style="width: 125px;"
            >First Name</td> 
            <td
            style="width: 125px;"
            >Last name</td> 
            <td
            style="width: 125px;"
            >Birthday</td> 
            <td
            style="width: 130px;"
            >Status</td> 
            <td
            style="width: 180px;"
            >Phone number</td> 
            <td
            style="width: 100px;"
            >Gender</td> 
<!--             <td     
            >Staff ID</td>  -->
            <td
            >First Name</td> 
            <td
            style="width: 100px;"
            >Last Name</td> 
            <td
            style="width: 120px;"
            >Title</td> 
            <td
            style="width: 210px;"
            >Date Created</td> 
</tr>
<?php

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

$sql="SELECT A.*, B. `firsname` as f1, `lastname` as f2, `dob` as f3, `status` as f4, `phone` as f5, `gender` as f6, c. `sfirstname` as S1, `slastname` as S2, `stitle` as S3 FROM admission as A 

LEFT JOIN `student` as B on A.`studentID` = B.`studentID`
LEFT JOIN `staff` as c on A.`staffID` = c.`staffID`";
$records=mysqli_query($link,$sql);
while ($row=mysqli_fetch_assoc($records)){

  echo "<tr>";
  
            echo "<td>".$row['admissionID']."</td>"; 
            echo "<td>".$row['f1']."</td>"; 
            echo "<td>".$row['f2']."</td>"; 
            echo "<td>".$row['f3']."</td>";     
            echo "<td>".$row['f4']."</td>";     
            echo "<td>".$row['f5']."</td>";     
            echo "<td>".$row['f6']."</td>";     
            // echo "<td>".$row['staffID']."</td>";     
            echo "<td>".$row['S1']."</td>";     
            echo "<td>".$row['S2']."</td>";     
            echo "<td>".$row['S3']."</td>";     
            echo "<td>".$row['admcreated']."</td>";     
  echo "</tr>";
} // end while

?>
</table>
</div>

    <div id="footer" style="
    margin-top: 40px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>