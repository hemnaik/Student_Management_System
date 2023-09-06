<?php
   error_reporting(0);
   $semester1=intval($_POST['semester1']);
   
   $con=mysqli_connect("localhost","root","");
       mysqli_select_db($con,"student");
   
            $select="SELECT * FROM student_info WHERE semester=$semester1";
            $result=mysqli_query($con,$select);
            if($result)
            {
                  echo "<h1 style=color:blue;>DATA RETRIEVAL BASED ON SEMESTER</h1>";
                  echo "<table border=5 bordercolor=magenta>";
                  echo "<tr align=center style=color:blue;>";
                  echo "<th>"."ID"."</th>";
                  echo "<th>"."NAME"."</th>";
                  echo "<th>"."SEMESTER"."</th>";
                  echo "<th>"."DEPARTMENT"."</th>";
                  echo "<th>"."GENDER"."</th>";
                  echo "</tr>";
                  while($r=mysqli_fetch_array($result))
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
            else
            {
                 echo "</br><h2>"."NO RECORDS FOUND</h2>";
            }
       mysqli_close($connection);
 ?>
