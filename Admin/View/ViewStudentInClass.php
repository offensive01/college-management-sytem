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
        <a href='../add/AddUnit.php'>Add Unit</a> || 
        <a href='ViewUnit.php'>View Unit</a> || 
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
">Students in Class</h3>

   <div id="subcontainer8">        
                           <div class="scroll">
        <table style="background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 31px;
    font-size: 15px;
    margin-left: 200px;
    ">
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 30px;
        "> 
            <td 
            style="width: 40px;"
            >ID </td> 
            <td
            style="width: "
            >First Name</td> 
            <td
            style="width: "
            >Last Name</td>    
            <td
            style="width: "
            >Gender</td>                      
            <td
            style="width: "
            >Short Name</td> 
            <td
            style="width: "
            >Course Name</td> 
            <td
            style="width: "
            >Programme Name</td> 
            <td
            style="width: "
            >Date</td>             
</tr>
<?php

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

$sql="SELECT A.*, B. `stuprogramname` as f1, C. `cousename` as f2, `shortname` as f3, E. `firsname` as F4, `lastname` as f5, `gender` as f6 FROM studentinclass as A 

LEFT JOIN `studentprogram` as B on A.`studentprogramID` = B.`studentprogramID`
LEFT JOIN `course` as C on A.`courseID` = C.`courseID`
LEFT JOIN `admission` as D on A.`admissionID` = D.`admissionID` 
LEFT JOIN `student` as E on D.`studentID` = E.`studentID`";
$records=mysqli_query($link,$sql);
while ($row=mysqli_fetch_assoc($records)){

  echo "<tr>";
  
            echo "<td>".$row['studentinclassID']."</td>"; 
            echo "<td>".$row['F4']."</td>"; 
            echo "<td>".$row['f5']."</td>"; 
            echo "<td>".$row['f6']."</td>"; 
            echo "<td>".$row['f3']."</td>"; 
            echo "<td>".$row['f2']."</td>"; 
            echo "<td>".$row['f1']."</td>"; 
            echo "<td>".$row['studentinclasscreated']."</td>";             
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