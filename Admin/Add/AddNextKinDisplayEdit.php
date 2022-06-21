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
        <a href='AddNextKin.php'>Add Next Kin</a> || 
        <a href='../view/ViewNextKin.php'>View Next Kin</a> || 
        <a href='AddNextkinDisplay.php'>Update Next Kin</a> || 
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
">Update Next Kin Information</h3>

   <div id="subcontainer8"> 
<!-- <?php require("../../Process/ProcessNextKin.php");?> -->

<?php require_once '../../process/ProcessNextKin.php'; ?>
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
$result = $mysqli ->query("SELECT * FROM nextkin ORDER BY nextkinID ASC") or die($mysqli->error);
?>

<div>

  <form action="../../Process/ProcessNextKin.php" method="POST">
    <input type="hidden"name ="nextkinID" value="<?php echo $nextkinID; ?>">
    <div class="input-group">


    <div class="input-group">
    <div>
    <label> National ID </label>
    <input type="text" name="nationalID" class="form-control"
    value="<?php echo $nationalID; ?>" placeholder="Enter National ID" required>
    <span class ="help-block"></span>
    </div>

    <div class="input-group">
    <div>
    <label> Student ID </label>
    <input type="text" name="studentID" class="form-control"
    value="<?php echo $studentID; ?>" placeholder="Enter Student ID" required>
    <span class ="help-block"></span>
    </div>

    <div class="input-group">
    <div>
    <label> First Name </label>
    <input type="text" name="nfirstname" class="form-control"
    value="<?php echo $nfirstname; ?>" placeholder="Enter First Name" required>
    <span class ="help-block"></span>
    </div>

    <div>
    <label> Last Name </label>
    <input type="text" name="nlastname" class="form-control"
    value="<?php echo $nlastname; ?>" placeholder="Enter Last Name" required>
    </div>

    <div>
    <label> Phone Number </label>
    <input type="text" name="nphone"  class="form-control"
    value="<?php echo $nphone; ?>" placeholder="Enter Phone number" required> 
    </div>

    <div>
    <label> Address </label>
    <input type="text" name="naddress"  class="form-control"
    value="<?php echo $naddress; ?>" placeholder="Enter Address" required> 
    </div>

    <div>
    <label> Gender </label>
    <input type="text" name="ngender"  class="form-control"
    value="<?php echo $ngender; ?>" placeholder="Enter Gender" required> 
    </div>

    <div>
    <label> Relation </label>
    <input type="text" name="nrelation"  class="form-control"
    value="<?php echo $nrelation; ?>" placeholder="Enter Relation" required> 
    </div>


    <div>
    <label> Proffession </label>
    <input type="text" name="nproffession"  class="form-control"
    value="<?php echo $nproffession; ?>" placeholder="Enter Proffession" required> 
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

    <div id="footer">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>