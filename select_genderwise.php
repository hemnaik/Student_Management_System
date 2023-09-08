//Genderwise retrieval of data records from database//
<?php
   error_reporting(0);
   $gender1=$_POST['gender'];
   
   $con=mysqli_connect("localhost","root","");
       mysqli_select_db($con,"student");
   
     if(strcmp($gender1,"FEMALE")==0)
     {
            $select="SELECT * FROM student_info WHERE gender LIKE 'FEMALE'";
            $result=mysqli_query($con,$select);
            if($result)
            {
                  echo "<h1 style=color:blue;>DATA RETRIEVAL BASED ON GENDER</h1>";
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
       }
     
     if(strcmp($gender1,"MALE")==0)
     {
            $select="SELECT * FROM student_info WHERE gender LIKE 'MALE'";
            $result=mysqli_query($con,$select);
            if($result)
            {
                  echo "<h1 style=color:blue;>DATA RETRIEVAL BASED ON GENDER</h1>";
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
       }
      mysqli_close($con);
 ?>
