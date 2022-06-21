<?php
// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: ../../login/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../../Reports/css/style.css">
</head>

<head>
    <title>School Management</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
        Welcome to the Dashboard!
<body>
    <div id="header">
        The Catholic University Of Eastern Africa | CUEA
    </div>
        Welcome ! <br/>
        <br/>
        <a href='../../index.php'>Home</a> || 
        <a href='add/addstudent.php'>Add Student</a> || 
        <a href='../reports/resultsStudents.php'>View Student</a> || 
        <a href='Add/AddStudentDisplay.php'>Update Student</a> || 
        <a href='../reports/resultsLogedIN.php'>View Users</a> || 
        <a href='add/addstaff.php'>Add Staff</a> || 
        <a href='view/ViewStaff.php'>View Staff</a> || 
        <a href='Add/AddStaffDisplay.php'>Update Staff</a> || 
        <a href='View/ViewAdmittedStudent.php'>View Admitted</a> || 
        <a href='Add/AddAdmitStudent.php'>Add Admit Student</a> || 
        <a href='view/ViewDuration.php'>View Duration</a> || 
        <a href='Add/addDuration.php'>Add Duration</a> || 
        <a href='Add/AddFaculty.php'>Add Faculty</a> || 
        <a href='view/ViewFaculty.php'>Faculty</a> || 
        <a href='view/ViewDepartment.php'>Department</a> || 
        <a href='Add/addDepartment.php'>Add Department</a> || 
        <a href='add/AddNextKin.php'>Add Next Kin</a> || 
        <a href='view/ViewNextKin.php'>View Next Kin</a> || 
        <a href='Add/AddNextkinDisplay.php'>Update Next Kin</a> || 
        <a href='add/AddLecturer.php'>Add Lecturer</a> || 
        <a href='view/ViewLecturer.php'>View Lecturer</a> || 
        <a href='add/AddUnit.php'>Add Unit</a> || 
        <a href='view/ViewUnit.php'>View Unit</a> || 
        <a href='Filters/FilterStaff.php'>Filter Staff</a> || 
        <a href='Filters/FilterStudent.php'>Filter Student</a> || 
        <a href='Instructions/Instructions.php'>Instructions</a> || 
        <a href='../login/Logout.php'> Logout</a> || 
        <br/><br/>
<h2 style="
    text-align: center;
    color: red;
    size: 30px;
">School Management Systems (Online Admission)</h2>
<h3 style="
    text-align: center;
    color: #000;
    size: 30px;
">Welcome Online Systems</h3>
        <form>

                        <a href="../homeDash.php"><img id="yves"src="../../../image/cuea.png"; style="height: 100px; padding: 20px 60px 20px 120px;"> </a>
    <p style="
    font-family: cursive;
    font-size: 13px;
    text-align: center;
    padding-right: 80px;
">
     Instructions
    </p>                                 

 <body>
     
     To Access the system the user would be required to have credentials which includes the user name and password, there are several level to access the system, in which includes what to do.
 </body>
        </form>
        </div>
    <div id="footer" style="
    margin-top: 50px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>