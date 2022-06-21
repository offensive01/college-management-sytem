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
        <a href='AddDepartment.php'>Add Department </a> || 
        <a href='../View/ViewDepartment.php'>View Department</a> || 
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
">Add Department Information</h3>
<!-- <?php require("../../Process/ProcessDepartment.php");?> -->

<?php require_once '../../Process/ProcessDepartment.php'; ?>


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
$result = $mysqli ->query("SELECT * FROM studentprogram ORDER BY studentprogramID ASC") or die($mysqli->error);
// make connection
$link=mysqli_connect('localhost','root', '');
// select db

// For Student ID dropdown ..........
mysqli_select_db($link,'mangalaregistration');
$sql="SELECT * FROM duration";
$records=mysqli_query($link,$sql);

// For Student ID dropdown ..........
mysqli_select_db($link,'mangalaregistration');
$sql="SELECT * FROM schoolprogram";
$records1=mysqli_query($link,$sql);
?>
<!-- <?php require("../../Process/ProcessDepartment.php");?> -->

  <div>
  <form action="../../Process/ProcessDepartment.php" method="POST">

    <input type="hidden"name ="studentprogramID" value="<?php echo $studentprogramID; ?>">
    <div class="input-group">

    <div class="input-group">
    <div>
    <label> Department Name </label>
    <input type="text" name="stuprogramname" class="form-control"
    value="<?php echo $stuprogramname; ?>" placeholder="Enter Department Name" required>
    <span class ="help-block"></span>
    </div>

    <div class="input-group">
    <div>
    <label> Program Name </label>
      <select name="durationID" style="width: 330px;
                                       font-size: inherit; ">
         <?php while ($row=mysqli_fetch_assoc($records)){
            echo "<option value='".$row['durationID']."'>".$row['durationID']." ".$row['durname']." ".$row['durname']." ".$row['durdescription']." ".$row['durdescription']."</option>";
         } // end while ?>
    </select>
            <span class ="help-block"></span>
                </div>

    <div class="input-group">
    <div>
    <label> School Program ID </label>
    <input type="text" name="schoolprogramID" class="form-control"
    value="<?php echo $schoolprogramID; ?>" placeholder="Enter School Program ID" required>
    <span class ="help-block"></span>
  </div>

    <div class="input-group">
    <div>
    <label> Description Name </label>
    <input type="text" name="description" class="form-control"
    value="<?php echo $description; ?>" placeholder="Enter Description Name" required>
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
</div>
</div>
    <div id="footer" style="
    margin-top: 80px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>