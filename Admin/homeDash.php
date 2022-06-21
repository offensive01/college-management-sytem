<?php
// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: ../login/login.php');
}

//User id from session
$id = $_SESSION['id'];

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

//Get current user details
$sql2 = "SELECT * FROM users WHERE id = '" . $id . "'";
$record = mysqli_query($link,$sql2);
$user = $record->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../Reports/css/style.css">
</head>
                    <style>
  .dropdown .dropbtn {
      font-size: 14px;
      border: none;
      outline: none;
      color: #00e;
      padding: 10px 19px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
      line-height: 60px;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #f6f6f6; color: red;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #110f0f;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  .dropdown-content a {
      float: none;
      color: #000000;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
      background-color: #fff;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
    color: red;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
                </style>
<head>
    <title>School Management</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
        Welcome to the Dashboard!
<body>
    <div id="header">
        The Catholic University Of Eastern Africa | CUEA
    </div>
                           <div class="dropdown">
                                <button class="dropbtn">Home</button>
                                <div class="dropdown-content">
                                  <a href="homeDash.php">Dashboard</a>
                                  <a href="../index.php">Home</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Student</button>
                                <div class="dropdown-content">
                                    
                                  <a href="add/addstudent.php">Add Student</a>
                                  <a href="../reports/resultsStudents.php">View Student</a>
                                    
                                    <?php if ($user['role'] == "superadmin") { ?>
                                  <a href="Add/AddStudentDisplay.php">Update Student</a>
                                  <a href="Add/AddAdmitStudent.php">Admit Student</a>
                                  <a href="View/ViewAdmittedStudent.php">View Admitted</a>
                                  <a href="View/ViewStudentInClass.php">Student in class</a>
                                <?php } ?>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Staff</button>
                                <div class="dropdown-content">
                                  <a href="add/addstaff.php">Add </a>
                                  <a href="view/ViewStaff.php">View </a>
                                  <a href="Add/AddStaffDisplay.php">Update </a>

                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Users</button>
                                <div class="dropdown-content">
                                  <a href="../Login/register.php">Register</a>
                                  <a href="../reports/resultsLogedIN.php">View</a>                           
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Next Kin</button>
                                <div class="dropdown-content">
                                  <a href="add/AddNextKin.php">Add</a>
                                  <a href="view/ViewNextKin.php">View</a>
                                  <a href="Add/AddNextkinDisplay.php">Update</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Faculty</button>
                                <div class="dropdown-content">
                                  <a href="Add/AddFaculty.php">Add</a>
                                  <a href="view/ViewFaculty.php">View</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Department</button>
                                <div class="dropdown-content">
                                  <a href="Add/addDepartment.php">Add</a>
                                  <a href="view/ViewDepartment.php">View</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Lecturers</button>
                                <div class="dropdown-content">
                                  <a href="add/AddLecturer.php">Add</a>
                                  <a href="view/ViewLecturer.php">View</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Units</button>
                                <div class="dropdown-content">
                                  <a href="add/AddUnit.php">Add</a>
                                  <a href="view/ViewUnit.php">View</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Filter</button>
                                <div class="dropdown-content">
                                  <a href="Filters/FilterStaff.php">Staff</a>
                                  <a href="Filters/FilterStudent.php">Student</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Duration</button>
                                <div class="dropdown-content">
                                  <a href="Add/addDuration.php">Add</a>
                                  <a href="view/ViewDuration.php">View</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Instructions</button>
                                <div class="dropdown-content">
                                  <a href="Instructions/Instructions.php">Instructions</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">System Logs</button>
                                <div class="dropdown-content">
                                  <a href="ViewSystemLogs">View</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Help</button>
                                <div class="dropdown-content">
                                  <a href="#">Help</a>
</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <button class="dropbtn">Logout</button>
                                <div class="dropdown-content">
                                  <a href="../login/Logout.php">Logout</a>
                              </a>
                                </div>
                              </div>

<h2 style="
    text-align: center;
    color: red;
    size: 30px;
    padding-top: 300px;
">School Management Systems (Online Admission)</h2>
<h3 style="
    text-align: center;
    color: #000;
    size: 30px;
">Welcome Online Systems</h3>
        <form>
                        <a href="homeDash.php"><img id="yves"src="../image/cuea.png"; style="height: 200px; padding: 20px 20px 20px 60px;"> </a>
    <p style="
    font-family: cursive;
    font-size: 13px;
">
        The Catholic University Of Eastern Africa | CUEA
    </p>                                 
    <p style="text-align: center;
    margin-left: -70px;
    color: red;
    font-family: monospace;
    font-size: 17px;">
        Online Admission
    </p>

        </form>
        </div>
    <div id="footer" style="
    margin-top: 50px;
">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://mangalapremice.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>