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
 <style>
       div.scroll {
  padding:4px;
  background-color: #ffffff;
  width: 1560px;
  height: 390px;
  overflow-x: hidden;
  overflow-y: auto;
  text-align:justify;
  line-height: 40px;
  color: #0d0d0d;
/*  border: 1px solid #000;*/  
  text-align: center;
  margin-top: 41px;
}

 </style>
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
                           <div class="scroll">
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
        <table style="background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 30px;
    font-size: 14.6px;
    margin-left: 60px;
    width: 1400px;
    
    ">
       <thead >
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 45px;
        "> 
            <th 
            style="width: 70px;"
            ># </th> 
            <th
            style="width: 70px;"
            >Nat ID</th> 
            <th
            style="width: 90px;"
            >Student</th> 
            <th
            style="width: 125px;"
            >First name</th> 
            <th
            style="width: 125px;"
            >Last name</th> 
            <th
            style="width: 180px;"
            >Phone number</th> 
            <th
            style="width: 200px;"
            >Address</th> 
            <th
            style="width: 100px;"
            >Gender</th> 
            <th
            style="width: 100px;"
            >Relation</th> 
            <th
            style="width: 140px;"
            >Proffession</th> 
          <th 
          style="width: 140px;"
          colspan="2">Action</th>
        </tr>
      </thead>

    <?php 
      while ($row = $result->fetch_assoc()):?>
        <tr>
          <td><?php echo $row['nextkinID']; ?>
          <td><?php echo $row['nationalID']; ?>
          <td><?php echo $row['studentID']; ?></td>
          <td><?php echo $row['nfirstname']; ?></td>
          <td><?php echo $row['nlastname']; ?></td>
          <td><?php echo $row['nphone']; ?></td>
          <td><?php echo $row['naddress']; ?></td>
          <td><?php echo $row['ngender']; ?></td>
          <td><?php echo $row['nrelation']; ?></td>
          <td><?php echo $row['nproffession']; ?></td>
          <td>
            <a href="AddNextKinDisplayEdit.php?edit=<?php echo $row['nextkinID']; ?>" 
              class="btn-info">Edit</a>
              <a href="../../process/ProcessNextKin.php?delete=<?php echo $row['nextkinID']; ?>"
                class="btn-danger">Delete</a>
          </td>
        </tr>

      <?php endwhile;  ?>
  </table>
</div>
</table>
</div>

    <div id="footer">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>