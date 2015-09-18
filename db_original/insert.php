<!DOCTYPE html>
<!-- saved from url=(0086)file:///C:/Users/Anuradha%20Dumendra/Desktop/Bootstrap/bootstrap-3.3.5-dist/hello.html -->
<html lang="en">
  <head>
    <title></title>
        <link rel="icon" type="image/x-icon" href="images/ico.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/js" href="js/bootstrap.min.js">

  </head>
  <body>
  <?php

	$complain_no=$_POST['complain_no'];
	$date_of_complain=$_POST['date_of_complain'];
	$arrival_time=$_POST['arrival_time'];
	$registered_time=$_POST['registered_time'];
	$gs_division_no=$_POST['gs_division_no'];
	$gs_division=$_POST['gs_division'];
	$time_incident_happen=$_POST['time_incident_happen'];
	$incident_date=$_POST['incident_date'];
	$address_line_1=$_POST['address_line_1'];
	$address_line_2=$_POST['address_line_2'];
	$address_line_3=$_POST['address_line_3'];
	$place_description=$_POST['place_description'];
	$crime_description=$_POST['crime_description'];


    include('conn.php');
    $db=mysql_select_db("cims",$con);

    $sql1="INSERT INTO complain_details(complain_no,date_of_complain, arrival_time, registered_time, gs_division_no, gs_division, time_incident_happen, incident_date, address_line_1,address_line_2,address_line_3,place_description,crime_description)
							values('$complain_no','$date_of_complain','$arrival_time','$registered_time','$gs_division_no','$gs_division','$time_incident_happen','$incident_date','$address_line_1','$address_line_2','$address_line_3','$place_description','$crime_description')";

	$sql2=mysql_query($sql1,$con);
	
		if($sql2){
			echo "<br>"."Insert data successfully to complain_details table";
		}
		else{
			die("error".mysql_error());
		}
?>

<div class="container">
<table class="table table-bordered">
<tr>
<td>complain_no
<td>date_of_complain
<td>arrival_time
<td>registered_time
<td>gs_division_no
<td>gs_division
<td>time_incident_happen
<td>incident_date
<td>address_line_1
<td>address_line_2
<td>address_line_3
<td>place_description
<td>crime_description
</tr>
<?php
include('conn.php');
$db=mysql_select_db("cims",$con);
$a="select * from complain_details";
$d=mysql_query($a,$con);
	
	while($row=mysql_fetch_assoc($d)){
echo 	"<tr><td>".$row['complain_no'].
     		"<td>".$row['date_of_complain'].
		 	"<td>".$row['arrival_time'].
		 	"<td>".$row['registered_time'].
		 	"<td>".$row['gs_division_no'].
		 	"<td>".$row['gs_division'].
		 	"<td>".$row['time_incident_happen'].
		 	"<td>".$row['incident_date'].
		 	"<td>".$row['address_line_1'].
			 "<td>".$row['address_line_2'].
			 "<td>".$row['address_line_3'].
			 "<td>".$row['place_description'].
			 "<td>".$row['crime_description'];
			 
	 
}
?>
</table>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./form_files/bootstrap.min.js"></script>
</body>
</html>
