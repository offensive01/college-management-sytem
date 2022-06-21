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
        <a href='AddDuration.php'>Add Duration </a> || 
        <a href='../View/ViewDuration.php'>View Duration</a> || 
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
">Add Student Information</h3>

<!-- <?php require("../../Process/ProcessDuration.php");?>  durname, durdescription, duration-->

  <div>
  <form action="../../Process/ProcessDuration.php" method="POST">

    <input type="hidden"name ="durationID" value="<?php echo $durationID; ?>">
    <div class="input-group">

    <div class="input-group">
    <div>
    <label> Duration Name </label>
    <input type="text" name="durname" class="form-control"
    value="<?php echo $durname; ?>" placeholder="Enter Duration Name" required>
    <span class ="help-block"></span>
    </div>


    <div class="input-group">
    <div>
    <label> Description </label>
    <input type="text" name="durdescription" class="form-control"
    value="<?php echo $durdescription; ?>" placeholder="Enter Description" required>
    <span class ="help-block"></span>
    </div>

    
    <div>
    <label> Duration </label>
    <input type="text" name="duration" class="form-control"
    value="<?php echo $duration; ?>" placeholder="Enter Duration" required>
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
    margin-top: 150px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>