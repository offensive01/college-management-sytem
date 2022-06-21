<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "prison");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM inmates";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>First Name</th>  
                         <th>Last Name</th>  
                         <th>Phone number</th>  
                         <th>Address</th>  
                         <th>DOB</th>  
                         <th>Status</th>  
            						 <th>Gender</th>
                         <th>created_at</th>
                      </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
                          <tr>  
                         <td>'.$row["IDNumber"].'</td>  
                         <td>'.$row["firstname"].'</td>  
                         <td>'.$row["lastname"].'</td>  
                         <td>'.$row["phonenumber"].'</td>  
                         <td>'.$row["address"].'</td>  
                         <td>'.$row["dob"].'</td>  
                         <td>'.$row["status"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["created_at"].'</td>  
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