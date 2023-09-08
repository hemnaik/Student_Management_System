<?php
  error_reporting(0);
  $id=intval($_REQUEST['id']);
  $department=$_REQUEST['department'];
  
  $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"student");
    
   if($con)
   {
       $update_name="UPDATE student_info SET department='$department' WHERE id=$id";
    
       $result=mysqli_query($con,$update_name);
  
       if($result)
       {
       echo  "<h2>RECORD UPDATED SUCCESSFULLY</h2>";

       $select="SELECT * FROM student_info WHERE id=$id and department LIKE '%$department%'";

       $result1=mysqli_query($con,$select);

          if($result1)
          {
                  echo "<table border=5 bordercolor=magenta>";
                  echo "<tr align=center style=color:blue;>";
                  echo "<th>"."ID"."</th>";
                  echo "<th>"."NAME"."</th>";
                  echo "<th>"."SEMESTER"."</th>";
                  echo "<th>"."DEPARTMENT"."</th>";
                  echo "<th>"."GENDER"."</th>";
                  echo "</tr>";
                  while($r=mysqli_fetch_array($result1))
                  {
                       echo "<tr align=center style=color:red;>";
                       echo "<th>".$r['id']."</th>";
                       echo "<th>".$r['name']."</th>";
                       echo "<th>".$r['semester']."</th>";
                       echo "<th>".$r['department']."</th>";
                       echo "<th>".$r['gender']."</th>";
                       echo "</tr>";
                  }
          }
        }
        else
        {
              echo "<h2>RECORD CANNOT BE UPDATED</h2>";
        }
       mysqli_close($con);
     } 
     else
     {
            echo "<h2>CONNECTION NOT ESTABLISHED</h2>";
     }
 ?>
    
