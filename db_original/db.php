<html>
<?php
include('conn.php');
$s1="CREATE DATABASE IF NOT EXISTS cims";
$s2=mysql_query($s1,$con);
 if(!$s2){
          die('could not create:'.mysql_error());
		  }
		  else{
		        echo "create database successfully";
 echo "<br>";                    }
$a=mysql_select_db('cims',$con);
	 if(!$a){
          die('could not select:'.mysql_error());
		  }
		  else{
		        echo "select database successfully";
               }
echo "<br>";
$sql="CREATE TABLE IF NOT EXISTS complain_details(complain_no varchar(10) NOT NULL,
										 date_of_complain date,
										 arrival_time time,
										 registered_time time,
										 gs_division_no int(5),
					 		   			 gs_division varchar(20),
					 		   			 time_incident_happen time,
					 		   			 incident_date date,
					 		   			 address_line_1 varchar(20),
					 		   			 address_line_2 varchar(20),
					 		   			 address_line_3 varchar(20),
					 		   			 place_description varchar(50),
					 		   			 crime_description varchar(70),PRIMARY KEY (complain_no))";

	$result=mysql_query($sql,$con);

	 if(!$result){
          die('could not create:'.mysql_error());
		  }
		  else{
		        echo "create table successfully";
                       }	
?>
</html>
