<?php
include("conect.php");

echo "<br>";

$db=mysql_select_db("cs2015g4",$con);

$y1=" create table student( stuId varchar(20)primary key, year int,name varchar(200), add1 varchar(30),add2 varchar(30), add3 varchar(30),tel1 varchar (10),tel2 varchar (10), email varchar(50), folderName varchar(50), csc1122 varchar(4), csc1113 varchar(4),   csc113a varchar(4), csc1142 varchar(4), csc1153 varchar(4), csc1213 varchar(4), csc1223 varchar(4), csc1233 varchar(4), csc1242 varchar(4), csc1251 varchar(4), csc2113 varchar(4), csc2123 varchar(4), csc2133 varchar(4), csc2143 varchar(4), csc2213 varchar(4), csc2233 varchar(4), csc2242 varchar(4), csc2252 varchar(4), csc2263 varchar(4), csc2222 varchar(4), csc2272 varchar(4) )";

$x1=mysql_query($y1,$con);

if(!$x1){

	echo("not create table 1").mysql_error();
} 
else {
	echo "Table 1 create sucsses";
}

/*

$y2=" create table logIn( uname varchar(50)primary key, pwrd varchar(100))";

$x2=mysql_query($y2,$conn);

if(!$x2){

	echo("not create table 2").mysql_error();
} 
else {
	echo "Table 2 create sucsses";
}

$y3=" create table stuInbox( msgId int auto_increment primary key,date date, stuId varchar(20), msg varchar(255), sub varchar(100), time time )";

$x3=mysql_query($y3,$conn);

if(!$x3){

	echo("not create table 3").mysql_error();
} 
else {
	echo "Table 3 create sucsses";
}

$y4="create table stuContact(contId int auto_increment primary key, stuId varchar(20), date date, msg varchar(255),sub varchar(100), time time)";

$x4=mysql_query($y4,$conn);

if(!$x4){

	echo("not create table 4").mysql_error();
} 
else {
	echo "Table 4 create sucsses";
}

$y5="create table forumQuiz( quizId int auto_increment primary key, stuId varchar(20), type varchar(50),quiz text, date date, time time)";

$x5=mysql_query($y5,$conn);

if(!$x5){

	echo("not create table 5").mysql_error();
} 
else {
	echo "Table 5 create sucsses";
}

$y6="create table forumAns( ansId int auto_increment primary key, stuId varchar(20), ans text,quizId int , date date, time time)";

$x6=mysql_query($y6,$conn);

if(!$x6){

	echo("not create table 6").mysql_error();
} 
else {
	echo "Table 6 create sucsses";
}


$y7="create table log(stuId varchar(20), date date, descrip text, approval varchar(10), primary key(stuId, date))";

$x7=mysql_query($y7,$conn);

if(!$x7){

	echo("not create table 7").mysql_error();
} 
else {
	echo "Table 7 create sucsses";
}


$y8="create table interview(intId int auto_increment primary key,comId int ,date date, sub varchar(100), intDate date, intTime time, venue varchar(100), stu_selected text, time time)";

$x8=mysql_query($y8,$conn);

if(!$x8){

	echo("not create table 8").mysql_error();
} 
else {
	echo "Table 8 create sucsses";
}


$y9="create table intResult(intReId int auto_increment primary key,date date,comId int, sub varchar(100),stuNo int,stu_selected text, startDate date, startTime time, venue varchar(100),  time time)";

$x9=mysql_query($y9,$conn);

if(!$x9){

	echo("not create table 9").mysql_error();
} 
else {
	echo "Table 9 create sucsses";
}


$y10="create table comContact (conId int auto_increment primary key, comId int, date date, sub varchar(100), msg text, time time  )";

$x10=mysql_query($y10,$conn);

if(!$x10){

	echo("not create table 10").mysql_error();
} 
else {
	echo "Table 10 create sucsses";
}

$y11="create table stuFeedback (fdbId int auto_increment primary key, stuId varchar(20), date date, type varchar(50), fdb text, time time      )";

$x11=mysql_query($y11,$conn);

if(!$x11){

	echo("not create table 11").mysql_error();
} 
else {
	echo "Table 11 create sucsses";
}

$y12=" create table comRejectLog(stuId varchar(20),date date, sub varchar(100), content text, rejDate date, primary key(stuId, rejDate))";

$x12=mysql_query($y12,$conn);

if(!$x12){

	echo("not create table 12").mysql_error();
} 
else {
	echo "Table 12 create sucsses";
}


$y13=" create table comNews(newsId int auto_increment primary key, comId int, date date, news text, approval varchar(10), valDate date    )";

$x13=mysql_query($y13,$conn);

if(!$x13){

	echo("not create table 13").mysql_error();
} 
else {
	echo "Table 13 create sucsses";
}

$y14="  create table comFeedback (fdbId int auto_increment primary key, comId int, date date, type varchar(50), fdb text, time time      )";

$x14=mysql_query($y14,$conn);

if(!$x14){

	echo("not create table 14").mysql_error();
} 
else {
	echo "Table 14 create sucsses";
}


$y15="  create table news( newsId int auto_increment primary key,   news text, date date, valDate date     )";

$x15=mysql_query($y15,$conn);

if(!$x15){

	echo("not create table 15").mysql_error();
} 
else {
	echo "Table 15 create sucsses";
}

$y16=" create table placement(stuId varchar(20)primary key, date date, comId int, field varchar(255) )";

$x16=mysql_query($y16,$conn);

if(!$x16){

	echo("not create table 16").mysql_error();
} 
else {
	echo "Table 16 create sucsses";
}

$y17="  create table company( comId int auto_increment primary key, name varchar(200), email varchar(50), web varchar (200), rank varchar(50),  add1 varchar(30),add2 varchar(30), add3 varchar(30),tel1 varchar (10),tel2 varchar (10))";

$x17=mysql_query($y17,$conn);

if(!$x17){

	echo("not create table 17").mysql_error();
} 
else {
	echo "Table 17 create sucsses";
}


$y18="  create table course( cId varchar(10) primary key, name varchar(200) ) ";

$x18=mysql_query($y18,$conn);

if(!$x18){

	echo("not create table 18").mysql_error();
} 
else {
	echo "Table 18 create sucsses";
}
*/










?>
