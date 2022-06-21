<!DOCTYPE html>
  <html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
    </head>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" type="text/css" href="../../css/cssY.css">
        <link rel="stylesheet" type="text/css" href="../../css/cssstaff.css">


         <title>Prison Munzenze</title>
          <body>
          <section class="container">
              <div id="subcontainer1">
                    <center><h1>The Ministry of Interior and Department of National Security. </h1></center>
                      <h2>MUNZENZE PRISON MANAGEMENT  SYSTEM</h2>
                            <h3>Correction & rehabilitation centre</h3>
                </div>
                <div id="subcontainer2">
                   <div class="nav">
                      <ul>
                        <li class="home"><a class="active" href="../index.html">Home</a></li>
                        <li class="contact"><a href="pages/contact.html">Contact</a></li>
                        <li class="about"><a href="pages/about.html">About Us</a></li>
            <li class="about"><a class="active" href="Login.php" style="margin-left: 400px; width: 100px;">Logout</a></li>
                      </ul>
                   </div>

                <div id="subcontainer3">
                  <body>

    <div class="container">
    <div class="wrapper">
<!--     <div class="header">
 -->   
  <h2>Administrator Dashord</h2> 
   Welcome (who logged_in)
  </div>

      <form> 
        <h3>Staff Information</h3>

<table >
        <tr bgcolor='#ff9900'> 
      <td style="width: 50px;">ID</td> 
      <td>First Name</td> 
      <td>Last Name</td> 
      <td>DOB</td> 
      <td>Status</td> 
      <td>Phone number</td> 
      <td>Address</td> 
      <td>Education L</td> 
      <td>Gender</td> 
      <td>Title</td> 
      <td>Nationality</td> 
      <td>Created </td> 
</tr>


<?php
$connect = mysqli_connect("localhost", "root", "", "prison");
$sql = "SELECT * FROM staff";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Prison MUNZENZE</title>  
        <link rel="stylesheet" type="text/css" href="../../../css/css.css">
        <link rel="stylesheet" type="text/css" href="../../../css/cssY.css">
        <link rel="stylesheet" type="text/css" href="../../../css/cssstaff.css">
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  

                         <td>'.$row["staff_id"].'</td>  
                         <td>'.$row["firstname"].'</td>  
                         <td>'.$row["lastname"].'</td>  
                         <td>'.$row["dob"].'</td>  
                         <td>'.$row["status"].'</td>  
                         <td>'.$row["phonenumber"].'</td>  
                         <td>'.$row["address"].'</td>  
                         <td>'.$row["educlevel"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["title"].'</td>  
                         <td>'.$row["nationality"].'</td>  
                         <td>'.$row["created_at"].'</td>  

       </tr>  
        ';  
     }
     ?>
</table>
         <div class="input-group">
           <div class="nav">
          </div>
            <div class="form-group">
          </div>              
      </form>
    </div>  
  </div>  
    </form>
<!-- Form for exporting the excel extension-->

   <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export excel" />


</div>

            <div id="subcontainer4">
            
                      <footer>
        <div class="col-md-3 mb-5">
          <ul class="list-unstyled footer-link">

              || <a href="../index.html" style="text-decoration: none; color: darkorange;
               font-size: 16px; font-family: cursive; }">Home</a></li> ||
              <a href="pages/contact.html" style="text-decoration: none; color: darkorange;
               font-size: 16px; font-family: cursive; }">Contact</a></li> ||
              <a href="pages/about.html" style="text-decoration: none; color: darkorange;
               font-size: 16px; font-family: cursive; }">About Us</a></li> ||
            </ul>
          </div>

        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Your Company <i class="fa fa-heart-o" aria-hidden="true"></i> Designed by <a href="https://yvesmahama.com" target="_blank" style="color: darkorange;text-decoration: none;
}">Mhma52</a>
</footer>
          </div>
        </div>
      </div>

            </div>
          </section>
       </body> 
    </head>
  </html> 

