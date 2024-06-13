//student database delete//
<?php
   error_reporting(0);
   $id1=intval($_REQUEST['id1']);
   $name1=strval($_REQUEST['name1']);
   $con=mysqli_connect("localhost","root","");
   mysqli_select_db($con,"student");
   
   if($con)
   {
       echo "<br/><h2 style=color:blue;>"."DATABASE CONNECTED"."</h2>";
       $delete="DELETE FROM st jiudent_info WHERE id=$id1 AND name LIKE '%$name1%'";
       $result=mysqli_query($con,$delete);
       if($result==true)
       {
          echo "<br/><h2 style=color:red;>"."RECORD DELETED"."</h2>";
       }
       else
       {
          echo "<br/>"."RECORD NOT DELETED";
       }
    }
    else
    {
        echo "<br/>"."DATABASE NOT CONNECTED";
    }
    mysqli_close($connection);
?>
