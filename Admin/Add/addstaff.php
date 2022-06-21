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
">Add Staff Information</h3>

<!-- <?php require("../../Process/processstaff.php");?> -->

  <div>
  <form action="../../Process/processstaff.php" method="POST">

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
     <label for="sstatus"> Choose a status: </label>
    <select name="sstatus" style="
    width: 325px;
    height: 28px;
    font-size: 16px;
    font-family: auto;
    opacity: 100px;">
      <option value="Undefined">Undefined</option>
      <option value="Married">Married</option>
      <option value="Single">Single</option>
      <option value="divorced">Divorced</option>
      <option value="Compliacted">Compliacted</option>
      <option value="None">None</option>
    </select>
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
    <label for="seduclevel"> Choose a Level: </label>
    <select name="seduclevel" style="
    width: 325px;
    height: 28px;
    font-size: 16px;
    font-family: auto;
    opacity: 100px;">
      <option value="Undefined">Undefined</option>
      <option value="Primary">Primary</option>
      <option value="Secondary">Secondary</option>
      <option value="University">University</option>
      <option value="Graduated">Graduated</option>
      <option value="Diploma">Diploma</option>
      <option value="Masters">Masters</option>
      <option value="PhD">PhD</option>
      <option value="None">None</option>
    </select>
    </div>

    <div>
    <label> Gender </label>
    <input type="radio" name="sgender"  class="form-control"
    <?php if (isset($sgender) && $sgender=="female") echo "checked";?>
    value="Female">Female

    <input type="radio" name="sgender"  class="form-control"
    <?php if (isset($sgender) && $sgender=="male") echo "checked";?>
    value="Male">Male

     <input type="radio" name="sgender"  class="form-control"
    <?php if (isset($sgender) && $sgender=="other") echo "checked";?>
    value="other">Other

    <div>
    <label for="stitle"> Choose a Title: </label>
    <select name="stitle" style="
    width: 325px;
    height: 28px;
    font-size: 16px;
    font-family: auto;
    opacity: 100px;">
      <option value="Undefined">Undefined</option>
      <option value="Director">Director</option>
      <option value="Assistant">Assistant</option>
      <option value="Technician">Technician</option>
      <option value="Cleaner">Cleaner</option>
      <option value="Analyst">Analyst</option>
      <option value="Electrician">Electrician</option>
      <option value="HoD">HoD</option>
      <option value="Admin">Admin</option>
      <option value="DVC">DVC</option>
      <option value="Chancellor">Chancellor</option>
      <option value="Science">Science</option>
      <option value="Dean">Dean</option>
      <option value="Officer">Officer</option>
      <option value="None">None</option>
    </select>
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
</div>
    <div id="footer">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>