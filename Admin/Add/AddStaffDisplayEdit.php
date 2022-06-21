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
">Staff Information</h2>
<h3 style="
    text-align: center;
    color: #000;
    size: 30px;
">Update Staff Information</h3>

   <div id="subcontainer8"> 
<!-- <?php require("../../Process/ProcessStaff.php");?> -->

<?php require_once '../../process/ProcessStaff.php'; ?>
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
$result = $mysqli ->query("SELECT * FROM staff ORDER BY staffID ASC") or die($mysqli->error);
?>

<div>

  <form action="../../Process/ProcessStaff.php" method="POST">
    <input type="hidden"name ="staffID" value="<?php echo $staffID; ?>">
    <div class="input-group">


    <div class="input-group">
    <div>
    <label> National ID </label>
    <input type="text" name="snationalityID" class="form-control"
    value="<?php echo $snationalityID; ?>" placeholder="Enter National ID" required>
    <span class ="help-block"></span>
    </div>


    <div class="input-group">
    <div>
    <label> First Name </label>
    <input type="text" name="sfirstname" class="form-control"
    value="<?php echo $sfirstname; ?>" placeholder="Enter First Name" required>
    <span class ="help-block"></span>
    </div>

    
    <div>
    <label> Last Name </label>
    <input type="text" name="slastname" class="form-control"
    value="<?php echo $slastname; ?>" placeholder="Enter Last Name" required>
    
    </div>

    <div>
    <label> Date of Birth </label>
    <input type="date" name="sdob"  class="form-control"
    value="<?php echo $sdob; ?>" placeholder="Enter Date of Birth" required>
    </div>

    <div>
    <label> Status </label>
    <input type="text" name="sstatus"  class="form-control"
    value="<?php echo $sstatus; ?>" placeholder="Enter Status" required> 
    </div>

    <div>
    <label> Phone Number </label>
    <input type="text" name="sphone"  class="form-control"
    value="<?php echo $sphone; ?>" placeholder="Enter Phone number" required> 
    </div>

    <div>
    <label> Address </label>
    <input type="text" name="saddress"  class="form-control"
    value="<?php echo $saddress; ?>" placeholder="Enter Address" required> 
    </div>

    <div>
    <label> Education Level </label>
    <input type="text" name="seduclevel"  class="form-control"
    value="<?php echo $seduclevel; ?>" placeholder="Enter Education Level" required> 
    </div>

    <div>
    <label> Gender </label>
    <input type="text" name="sgender"  class="form-control"
    value="<?php echo $sgender; ?>" placeholder="Enter Gender" required> 
    </div>

    <div>
    <label> Title </label>
    <input type="text" name="stitle"  class="form-control"
    value="<?php echo $stitle; ?>" placeholder="Enter Title" required> 
    </div>


    <div>
    <label> Nationality </label>
    <input type="text" name="snationality"  class="form-control"
    value="<?php echo $snationality; ?>" placeholder="Enter Nationality" required> 
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

    <div id="footer">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>