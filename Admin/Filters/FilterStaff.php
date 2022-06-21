<?php
// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: ../login/login.php');
}
?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../reports/css/style.css">
</head>

<head>
    <title>School Management</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
 
 <style>
       div.scroll {
  padding:4px;
  background-color: #ffffff;
  width: 1530px;
  height: 260px;
  overflow-x: hidden;
  overflow-y: auto;
  text-align:justify;
  line-height: 40px;
  color: #0d0d0d;
 /* border: 1px solid #000;*/
  text-align: center;
  margin-top: 41px;
}

 </style>
<body>
    <div id="header">
        The Catholic University Of Eastern Africa | CUEA
    </div>
       <b>  Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?></b> || Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?> <a href='../Login/logout.php'>Logout</a><br/>

        <br/>
        <a href='../../index.php'>Home</a> || 
        <a href='FilterStaff.php'>Filter Staff</a> || 
        <a href='FilterStudent.php'>Filter Student</a> || 
        <a href='../add/addstaff.php'>Add Staff</a> || 
        <a href='../add/AddStaffDisplay.php'>Update Staff</a> || 
        <a href='../view/ViewStaff.php'>View Staff</a> || 
        <a href='../add/addstudent.php'>Add Students</a> || 
        <a href='../add/AddStudentDisplay.php'>Update Student</a> || 
        <a href='../../reports/resultsStudents.php'>View Student</a> || 
        <a href='../../reports/resultsLogedIN.php'>View Users</a> || 
        <a href='../../login/Logout.php'> Logout</a> || 

        <br/><br/>
<h3 style="
    text-align: center;
    color: red;
    size: 30px;
">Filter Staff Information</h3>
<form action="">
        <div class="form-group">
    <label> Start Date </label>
    <input type="date" name="start_date"  class="form-control"
    value="" placeholder="Enter dob" required style="
    height: 40px;
    width: 250px;
    text-align: end;
    font-size: 15px;
     " >
    </div>
    <p style="
    margin-bottom: -25px;
    ">
      .
    </p>

        <div class="form-group">
    <label> End Datee </label>
    <input type="date" name="end_date"  class="form-control"
    value="" placeholder="Enter dob" required style="
    height: 40px;
    width: 250px;
    text-align: end;
    font-size: 15px;
     " >
    </div>
    <p style="
    margin-bottom: -25px;
    ">
      .
    </p>

    <button type="submit" class="btn btn-primary" name="save">Submit</button>

</form>


   <div id="subcontainer8">       
                           <div class="scroll">
        <table style="background-color: #0b0909;
    color: #042531;
    color: #f7f7f7;
    font-family: monospace;
    letter-spacing: 1.9px;
    line-height: 30px;
    font-size: 15px;
    ">
        <tr style="background-color: #fff;
    color: #042531;
    text-align: center;
    line-height: 45px;
        "> 
     
            <td 
            style="width: 70px;"
            ># </td> 
            <td
            style="width: 70px;"
            >ID</td> 
            <td
            style="width: 170px;"
            >First name</td> 
            <td
            style="width: 125px;"
            >Last name</td> 
            <td
            style="width: 220px;"
            >Birth</td> 
            <td
            style="width: 120px;"
            >Status</td> 
            <td
            style="width: 300px;"
            >Phone number</td> 
            <td
            style="width: 250px;"
            >Address</td> 
            <td
            style="width: 120px;"
            >Education</td> 
            <td
            style="width: 80px;"
            >Gender</td> 
            <td
            style="width: "
            >Title</td> 
<!--             <td
            style="width: 120px;"
            >Nationality</td> 
 -->            <td
            style="width: 300px;"
            >Date Created</td> 
</tr>
<?php

// make connection
$link=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($link,'mangalaregistration');

// // setting the start and end date for searching
if (isset($_GET['start_date']) && isset($_GET['end_date'])) {


// declaring both date
$start_date = $_GET['start_date'];
$stop_date = $_GET['end_date'];

// SQL query
$sql="SELECT * FROM `staff` where screated BETWEEN '".$start_date."' AND '".$stop_date."'";
  
// incase there is no search it displays empty table

$records=mysqli_query($link,$sql);

while ($row=mysqli_fetch_assoc($records)){

  echo "<tr>";
  
            echo "<td>".$row['staffID']."</td>"; 
            echo "<td>".$row['snationalityID']."</td>"; 
            echo "<td>".$row['sfirstname']."</td>"; 
            echo "<td>".$row['slastname']."</td>";     
            echo "<td>".$row['sdob']."</td>";     
            echo "<td>".$row['sstatus']."</td>";     
            echo "<td>".$row['sphone']."</td>";     
            echo "<td>".$row['saddress']."</td>";     
            echo "<td>".$row['seduclevel']."</td>";     
            echo "<td>".$row['sgender']."</td>";     
            echo "<td>".$row['stitle']."</td>";     
            // echo "<td>".$row['snationality']."</td>";       
            echo "<td>".$row['screated']."</td>";      
  echo "</tr>";
} // end while
}
?>
</table>
</div>

    <div id="footer">
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company
Designed by <a href="https://yvesmahama.com" style="color:red;text-decoration: none;
">Mangala</a>    </div>
</body>
</html>
