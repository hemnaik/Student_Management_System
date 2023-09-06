//Main file//
<html>
<head>
<body>
<center>
<fieldset style="background:gray;height:200px;width:600px;">

<form id="form1" action="<?php $_PHP_SELF ?>" method="POST">

<b><h3 style="color:white;border-style:groove;border-color:white;">STUDENT DATABASE MANAGEMENT SYSTEM</h3></b>
<input type="SUBMIT" value="INSERT" name="database" style="color:blue;background:yellow;"></input>
<input type="SUBMIT" value="DELETE" name="database" style="color:blue;background:yellow;"></input>
<input type="SUBMIT" value="UPDATE" name="database" style="color:blue;background:yellow;"></input>
<input type="SUBMIT" value="SELECT" name="database" style="color:blue;background:yellow;"></input>
</form>
</fieldset>
</center>
</body>
</head>
</html>


<?php
   error_reporting(0);
   if($_POST['database']=="INSERT")
   {
        echo "<br></br>";
        echo "<html>";
        echo "<body>";
        echo "<CENTER>";
        echo "<fieldset style=background:gray;height:300px;width:500px;>";
        echo "<form action=student_database_insert.php method=POST>";
        echo "<h3 style=color:yellow;border-style:solid;border-color:black;>"."INSERT RECORD INTO STUDENT DATABASE"."</h3>";

        echo "<label><b>"."ID "."</label></b>";
        echo "<input type=text name=id required></input>";
        echo "<br></br>";

        echo "<label><b>"."NAME "."</label></b>";
        echo "<input type=text name=name required></input>";
        echo "<br></br>";


        echo "<label><b>"."SEMESTER "."</label></b>";
        echo "<select name=semester>";
        echo "<option value=1>"."1"."</option>";
        echo "<option value=2>"."2"."</option>";
        echo "<option value=3>"."3"."</option>";
        echo "<option value=4>"."4"."</option>";
        echo "<option value=5>"."5"."</option>";
        echo "<option value=6>"."6"."</option>";
        echo "</select>";
        echo "<br></br>";

        echo "<label><b>"."DEPARTMENT "."</label></b>";
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

        echo "<b><label>"."GENDER"."</label></b>";
        echo "<input style=color:yellow; type=radio name=gender value=MALE>"."MALE"."</input>";
        echo "<input style=color:yellow; type=radio name=gender value=FEMALE>"."FEMALE"."</input>";
        echo "<input style=color:yellow; type=radio name=gender value=OTHERS>"."OTHERS"."</input>";
        echo "<br></br>";

        echo "<input type=SUBMIT value=SUBMIT></input>";
        echo "</fieldset>";
        echo "</form>";
        echo "</CENTER>";
        echo "</body>";
        echo "</html>";
   }


  if($_POST['database']=="DELETE")
  {
        echo "<br></br>";
        echo "<html>";
        echo "<body>";
        echo "<CENTER>";
        echo "<fieldset style=background:gray;height:300px;width:500px;>";
        echo "<form action=student_database_delete.php method=POST>";
        echo "<h3 style=color:yellow;border-color:black;border-style:solid;>"."DELETE RECORD FROM STUDENT DATABASE"."</h3>";

        echo "<label><b>"."ID "."</label></b>";
        echo "<input type=text name=id1 required></input>";
        echo "<br></br>";

        echo "<label><b>"."NAME "."</label></b>";
        echo "<input type=text name=name1 required></input>";
        echo "<br></br>";
        echo "<input type=SUBMIT value=SUBMIT></input>";
        echo "</fieldset>";
        echo "</form>";
        echo "</CENTER>";
        echo "</body>";
        echo "</html>";
  }

  
  if($_POST['database']=="SELECT")
  {
        echo "<br></br>";
        echo "<html>";
        echo "<body>";
        echo "<CENTER>";
        echo "<fieldset style=background:gray;height:350px;width:500px;>";
        echo "<form action=student_database_select.php method=POST>";
        echo "<h3 style=color:yellow;border-color:black;border-style:solid;>"."RETRIEVE DATA FROM STUDENT DATABASE"."</h3>";

        echo "<label><b>"."ID "."</label></b>";
        echo "<input type=text name=id2></input>";
        echo "<br></br>";

        echo "<label><b>"."NAME "."</label></b>";
        echo "<input type=text name=name2></input>";
        echo "<br></br>";
        echo "<input type=SUBMIT value=DISPLAY  name=record></input></br></br>";
        echo "<input type=SUBMIT value=ALLRECORDS name=record></input><br></br>";
        echo "<input type=SUBMIT value=RETRIEVE-THROUGH-SEMESTER  name=record></input></br></br>";
        echo "<input type=SUBMIT value=RETRIEVE-THROUGH-GENDER  name=record></input></br></br>";
        echo "<input type=SUBMIT value=RETRIEVE-THROUGH-DEPARTMENT  name=record></input></br></br>";
        echo "</fieldset>";
        echo "</form>";
        echo "</CENTER>";
        echo "</body>";
        echo "</html>";
   }

  if($_POST['database']=="UPDATE")
  {
        echo "<br></br>";
        echo "<html>";
        echo "<body>";
        echo "<CENTER>";
        echo "<fieldset style=background:gray;height:300px;width:500px;>";
        echo "<h3 style=color:yellow;border-style:solid;border-color:black;>"."UPDATE THE DATABASE"."</h1>";
        echo "<form action=student_database_update.php method=POST>";     
        echo "<input type=SUBMIT value=UPDATE-NAME name=update></input>";
        echo "<input type=SUBMIT value=UPDATE-SEMESTER name=update></input>";
        echo "<input type=SUBMIT value=UPDATE-DEPARTMENT name=update></input>";
  }
 ?>
