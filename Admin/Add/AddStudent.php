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
">Student Information</h2>
<h3 style="
    text-align: center;
    color: #000;
    size: 30px;
">Add Student Information</h3>

<!-- <?php require("../../Process/ProcessStudent.php");?> -->

  <div>
  <form action="../../Process/ProcessStudent.php" method="POST">

    <input type="hidden"name ="studentID" value="<?php echo $studentID; ?>">
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
    <label> First Name </label>
    <input type="text" name="firsname" class="form-control"
    value="<?php echo $firsname; ?>" placeholder="Enter First Name" required>
    <span class ="help-block"></span>
    </div>

    
    <div>
    <label> Last Name </label>
    <input type="text" name="lastname" class="form-control"
    value="<?php echo $lastname; ?>" placeholder="Enter Last Name" required>
    
    </div>

    <div>
    <label> Date of Birth </label>
    <input type="date" name="dob"  class="form-control"
    value="<?php echo $dob; ?>" placeholder="Enter Date of Birth" required>
    </div>

    <div>
    <label for="status"> Choose a status: </label>
    <select name="status" style="
    width: 325px;
    height: 28px;
    font-size: 16px;
    font-family: auto;
    opacity: 100px;">
      <option value="Undefined">Undefined</option>
      <option value="Married">Married</option>
      <option value="Single">Single</option>
      <option value="Divorced">Divorced</option>
      <option value="Compliacted">Compliacted</option>
      <option value="None">None</option>
    </select>
    </div>

    <div>
    <label> Phone Number </label>
    <input type="text" name="phone"  class="form-control"
    value="<?php echo $phone; ?>" placeholder="Enter Phone number" required> 
    </div>

    <div>
    <label> Address </label>
    <input type="text" name="address"  class="form-control"
    value="<?php echo $address; ?>" placeholder="Enter Address" required> 
    </div>

    <div>
    <label> Gender </label>
    <input type="radio" name="gender"  class="form-control"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="Female">Female

    <input type="radio" name="gender"  class="form-control"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="Male">Male

     <input type="radio" name="gender"  class="form-control"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other


    <div>
    <label> Nationality </label>
    <input type="text" name="nationality"  class="form-control"
    value="<?php echo $nationality; ?>" placeholder="Enter Nationality" required> 
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