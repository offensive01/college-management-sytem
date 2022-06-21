<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "mangalaregistration");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM student";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>First Name</th>  
                         <th>Last Name</th>  
                         <th>Date of Birth</th>  
                         <th>Status</th>  
                         <th>Phone number</th>  
                         <th>Address</th>  
                         <th>Gender</th>
            						 <th>Nationality</th>
                         <th>created_at</th>
                      </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
                          <tr>  
                         <td>'.$row["nationalID"].'</td>  
                         <td>'.$row["firsname"].'</td>  
                         <td>'.$row["lastname"].'</td>  
                         <td>'.$row["dob"].'</td>  
                         <td>'.$row["status"].'</td>  
                         <td>'.$row["phone"].'</td>  
                         <td>'.$row["address"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["nationality"].'</td>  
                         <td>'.$row["created"].'</td>  
            						  </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=filenames.xls');
  echo $output;
 }
}
?>