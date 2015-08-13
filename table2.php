<?php


$mysql_hostname="localhost";
$mysql_databasename="teacher";
$mysql_user="root";
$mysql_password="";
$connect=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$selected =mysql_select_db($mysql_databasename,$connect)  or die("Could not select database");
$i=0;
$j=24;

	$dat=$_POST['date2'];
	echo $dat;

while($i<$j)
{
$stuid=$_POST['sid'][$i];
echo $stuid;	

$clas1=$_POST['class1'][$i];
echo $clas1;

$clas2=$_POST['class2'][$i];
echo $clas2;

$clas3=$_POST['class3'][$i];
echo $clas3;

$clas4=$_POST['class4'][$i];
echo $clas4;

$clas5=$_POST['class5'][$i];
echo $clas5;

$clas6=$_POST['class6'][$i];
echo $clas6;

$clas7=$_POST['class7'][$i];
echo $clas7;
$i++;


mysql_query("INSERT INTO attendance (date,studentid,class1,class2,class3,class4,class5,class6,class7) VALUES ('".$dat."','".$stuid."','".$clas1."','".$clas2."','".$clas3."','".$clas4."','".$clas5."','".$clas6."','".$clas7."')");
}

?>