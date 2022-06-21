<?php
session_start();

//export.php  
$connect = mysqli_connect("localhost", "root", "", "prison");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT A.*, C. `firstname` as F1, C. `lastname` as L1, B. `type` FROM 
syslog as A 


LEFT JOIN `users` as B on A. `userIDD` = B.`userID`
LEFT JOIN `staff` as C on B.`staff_ID` = C.`staff_ID`
";
 $result = mysqli_query($connect, $query);

 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Trans ID</th>  
                         <th>User ID</th>  
                         <th>First Name</th>  
                         <th>Last Name</th>  
                         <th>Type</th>  
                         <th>Activity</th>  
                         <th>Date</th>  
                      </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
                          <tr>  
                         <td>'.$row["SysLogID"].'</td>  
                         <td>'.$row["userIDD"].'</td>  
                         <td>'.$row["F1"].'</td>  
                         <td>'.$row["L1"].'</td>  
                         <td>'.$row["type"].'</td>  
                         <td>'.$row["UActivity"].'</td>  
                         <td>'.$row["created_at"].'</td>  
            						  </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=filenames.xls');
  echo $output;

    // Sql Query for Reports
  $sql = "INSERT INTO syslog ( UserIDD, UActivity, created_at) VALUES ( ".$_SESSION['userID'].", 'imported personal information about the the prisoner into the system in the inmates TABLE ', now() )";

      mysqli_query($connect, $query);

 }
}
?>