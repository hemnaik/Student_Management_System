
//database retrieval//
<?php
  
   error_reporting(0);
   

   $obj=mysqli_connect("localhost","root","");
    mysqli_select_db($obj,"student");

  if($obj)
  {
     
   if($_REQUEST['record']=="DISPLAY")
   {
       echo "<br/>"."DATABASE CONNECTED";
       $id2=intval($_REQUEST['id2']);
       $name2=strval($_REQUEST['name2']);


       $search="SELECT * FROM student_info WHERE id=$id2 AND name LIKE '%$name2%'";
       $result=mysqli_query($obj,$search);
      
      if($result)
      {
       echo "<h2 style=color:red;>"."RECORD FROM STUDENT DATABASE"."</h2>";
       echo "<html>";
       echo "<body>";
       echo "<table border=5 bordercolor=magenta>";
       echo "<tr align=center style=color:blue>";
       echo "<th>ID</th>";
       echo "<th>"."NAME"."</th>";
       echo "<th>"."SEMESTER"."</th>";
       echo "<th>"."DEPARTMENT"."</th>";
       echo "<th>"."GENDER"."</th>";
       echo "</tr>";
       echo "<tr align=center style=color:green>";
       while($r=mysqli_fetch_array($result))
       {
          echo "<td>".$r['id']."</td>";
          echo "<td>".$r['name']."</td>";
          echo "<td>".$r['semester']."</td>";
          echo "<td>".$r['department']."</td>";
          echo "<td>".$r['gender']."</td>";
          echo "</tr>";
       }
       echo "</table>";
       echo "</body>";
       echo "</html>";
      }
      else
      {
           echo "<br/>"."RECORD NOT FOUND";
      }
   }
   
    
     
   if($_REQUEST['record']=="ALLRECORDS")
   {
       echo "<br/>"."DATABASE CONNECTED";
       $search="SELECT * FROM student_info";
       $result=mysqli_query($obj,$search);
    
       echo "<h2 style=color:red;>"."RECORD FROM STUDENT DATABASE"."</h2>";
       echo "<html>";
       echo "<body>";
       echo "<table border=5 bordercolor=magenta>";
       echo "<tr align=center style=color:blue>";
       echo "<th>"."ID"."</th>";
       echo "<th>"."NAME"."</th>";
       echo "<th>"."SEMESTER"."</th>";
       echo "<th>"."DEPARTMENT"."</th>";
       echo "<th>"."GENDER"."</th>";
       echo "</tr>";
       while($s=mysqli_fetch_array($result))
       {
          echo "<tr align=left style=color:green>";
          echo "<td>".$s['id']."</td>";
          echo "<td>".$s['name']."</td>";
          echo "<td>".$s['semester']."</td>";
          echo "<td>".$s['department']."</td>";
          echo "<td>".$s['gender']."</td>";
          echo "</tr>";
       }
       echo "</table>";
       echo "</body>";
       echo "</html>";
     }

     if($_REQUEST['record']=="RETRIEVE-THROUGH-SEMESTER")
     {
         echo "<html>";
         echo "<body>";
         echo "<form method=post action=student_database_select_semester.php>";
         echo "<h3 style=color:red;>SELECT SEMESTER-WISE STUDENT DATA RETRIEVAL</h3>";
         echo "<select name=semester1>";
         echo "<option value=1>"."1"."</option>";
        echo "<option value=2>"."2"."</option>";
        echo "<option value=3>"."3"."</option>";
        echo "<option value=4>"."4"."</option>";
        echo "<option value=5>"."5"."</option>";
        echo "<option value=6>"."6"."</option>";
        echo "</select>";
        echo "<br></br>";
        echo "<input type=SUBMIT value=SUBMIT></input>";
        echo "</form>";
        echo "</body>";
        echo "</html>";

        
     }
     
     if($_REQUEST['record']=="RETRIEVE-THROUGH-GENDER")
     {
         echo "<html>";
         echo "<body>";
         echo "<form method=post action=student_database_select_gender.php>";
         echo "<h3 style=color:red;>SELECT GENDER FOR DATA RETRIEVAL</h3>";
         echo "<select name=gender>";
         echo "<option value=MALE>"."MALE"."</option>";
         echo "<option value=FEMALE>"."FEMALE"."</option>";
         echo "<option value=OTHERS>"."OTHERS"."</option>";
         echo "</select>";
         echo "<br></br>";
         echo "<input type=SUBMIT value=SUBMIT></input>";
         echo "</form>";
         echo "</body>";
         echo "</html>";
     }
   
     if($_REQUEST['record']=="RETRIEVE-THROUGH-DEPARTMENT")
     {
         echo "<html>";
         echo "<body>";
         echo "<form method=post action=student_database_select_department.php>";
         echo "<h3 style=color:red;>SELECT DEPARTMENT FOR DATA RETRIEVAL</h3>";
         echo "<select name=department>";
         echo "<option value=INFORMATION-TECHNOLOGY>"."INFORMATION-TECHNOLOGY"."</option>";
        echo "<option value=COMPUTER-ENGINEERING>"."COMPUTER-ENGINEERING"."</option>";
        echo "<option value=CIVIL-ENGINEERING>"."CIVIL-ENGINEERING"."</option>";
        echo "<option value=CSE>"."CSE"."</option>";
        echo "<option value=BCA>"."BCA"."</option>";
        echo "<option value=MCA>"."MCA"."</option>";
        echo "<option value=BSC(IT)>"."BSC(IT)"."</option>";
        echo "<option value=MSC(IT)>"."MSC(IT)"."</option>";
        echo "<option value=MECHANICAL-ENGINEERING>"."MECHANICAL-ENGINEERING"."</option>";
        echo "<option value=ELECTRICAL-ENGINEERING>"."ELECTRICAL-ENGINEERING"."</option>";
        echo "</select>";
        echo "<br></br>";
        echo "<input type=SUBMIT value=SUBMIT></input>";
        echo "</form>";
        echo "</body>";
        echo "</html>";
     }
     mysqli_close($obj);
  }
?>



