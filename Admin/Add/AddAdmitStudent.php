<?php
// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: ../../login/login.php');
}
?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../reports/css/styleLo.css">
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
        <a href='AddAdmitStudent.php'>Add Admitted Student </a> || 
        <a href='../View/ViewAdmittedStudent.php'>View Admitted</a> || 
        <a href='addstudent.php'>Add Student</a> || 
        <a href='AddStudentDisplay.php'>Update Student</a> || 
        <a href='../../reports/resultsStudents.php'>View Student</a> || 
        <a href='addstaff.php'>Add Staff</a> || 
        <a href='AddStaffDisplay.php'>Update Staff</a> || 
        <a href='../view/ViewStaff.php'>View Staff</a> || 
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
    margin-top: 25px;
">Add Student Information</h3>
<!-- <?php require("../../Process/ProcessAdmitStudent.php");?> -->

<?php require_once '../../Process/ProcessAdmitStudent.php'; ?>


<?php

if(isset($_SESSION['message'])): ?>

  <div class="alert">
 
    <?php
    echo $_SESSION['message'];
    unset($_SESSION ['message']);
    ?>

</div>
<?php endif ?>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));
$result = $mysqli ->query("SELECT * FROM admission ORDER BY admissionID ASC") or die($mysqli->error);
// make connection
$link=mysqli_connect('localhost','root', '');
// select db

// For Student ID dropdown ..........
mysqli_select_db($link,'mangalaregistration');
$sql="SELECT * FROM student";
$records=mysqli_query($link,$sql);

// For Staff ID dropdown ..........
mysqli_select_db($link,'mangalaregistration');
$sql="SELECT * FROM staff";
$records1=mysqli_query($link,$sql);

?>


  <div>
  <form action="../../Process/ProcessAdmitStudent.php" method="POST">

    <input type="hidden"name ="admissionID" value="<?php echo $admissionID; ?>">
    <div class="input-group">

    <div class="input-group">
    <div>
    <label> Student ID & Name </label>
      <select name="studentID" 
      style="width: 330px;
     font-size: inherit; ">
<?php 
while ($row=mysqli_fetch_assoc($records)){
            echo "<option value='".$row['studentID']."'>".$row['studentID']." ".$row['firsname']." ".$row['lastname']."</option>";
} // end while
?>
    </select>
    <span class ="help-block"></span>
    </div>

    <div class="input-group">
    <div>
    <label> Staff Name & ID </label>
      <select name="staffID" 
      style="width: 330px;
     font-size: inherit; ">
<?php 
while ($row=mysqli_fetch_assoc($records1)){
            echo "<option value='".$row['staffID']."'>".$row['staffID']." ".$row['sfirstname']." ".$row['slastname']."</option>";
} // end while
?>
    </select>
    <span class ="help-block"></span>
    </div>

    <div>
      <?php 
        if ($update == true):
      ?>

    <button type="submit" class="btn btn-info" name="update">Update</button>
    <?php else: ?>
    <button type="submit" class="btn btn-primary" name="save">Save</button>
    <?php endif; ?>
    </div>

  </form>
</div>
</div>
</div>

    <div id="footer" style="
    margin-top: 210px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>