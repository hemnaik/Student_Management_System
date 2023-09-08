//insert into database//
<?php
   error_reporting(0);
   $id1=intval($_REQUEST['id']);
   $name1=strval($_REQUEST['name']);
   $semester1=intval($_REQUEST['semester']);
   $department1=strval($_REQUEST['department']);
   $gender1=strval($_REQUEST['gender']);
   
   $connection=mysqli_connect("localhost","root","");
     mysqli_select_db($connection,"student");
   
    if($connection)
    {
         echo "<br/>"."DATABSE CONNECTED";
        
         $insert="INSERT INTO student_info(id,name,semester,department,gender) values($id1,'$name1',$semester1,'$department1','$gender1')";
         $result=mysqli_query($connection,$insert);
    
         if($result)
         {
              echo "<br/>"."RECORD INSERTED SUCCESSFULLY";
              echo "<html>";
              echo "<body>";
              echo "<table border=6 bordercolor=magenta>";
              echo "<tr align=center style=color:blue>";
              echo "<th>"."ID"."</th>";
              echo "<th>"."NAME"."</th>";
              echo "<th>"."SEMESTER"."</th>";
              echo "<th>"."DEPARTMENT"."</th>";
              echo "<th>"."GENDER"."</th>";
              echo "</tr>";
              echo "<tr align=center style=color:green>";
              echo "<td>".$id1."</td>";
              echo "<td>".$name1."</td>";
              echo "<td>".$semester1."</td>";
              echo "<td>".$department1."</td>";
              echo "<td>".$gender1."</td>";
              echo "</tr>";
              echo "</table>";
              echo "</body>";
              echo "</html>";
         }
         else
         {
             echo "<br/>"."RECORD NOT INSERTED"; 
         }
    }
    else
    {
            echo "<br/>"."DATABSE NOT CONNECTED";
    }
    mysqli_close($connection);
  ?>
              


