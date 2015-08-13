<?php

$mysql_hostname="localhost";
$mysql_databasename="teacher";
$mysql_user="root";
$mysql_password="";
$connect=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$selected =mysql_select_db($mysql_databasename,$connect)  or die("Could not select database");

?>
<?php
$stuid=$_POST['studentid'];
	echo $stuid;

?>
<form>

<table id="add_individual"  width="100%" class="imagetable" cellpadding="5" cellspacing="5" border="3" style="background-color:#E6E6FA;">
			<tr>
			<th>date</th>
			<th>studentid</th>
			<th>class1</th>
			<th>class2</th>
			<th>class3</th>
			<th>class4</th>
			<th>class5</th>
			<th>class6</th>
			<th>class7</th>
			</tr>
<?php
$i=0;
	$result=mysql_query("SELECT * FROM attendance where studentid='$stuid'");
	while($semrow=mysql_fetch_array($result))
	{
		echo "
		<tr>
						<td>".$semrow['date']."</td>
						<td>".$semrow['studentid']."</td>
						<td>".$semrow['class1']."</td>
						<td>".$semrow['class2']."</td>
						<td>".$semrow['class3']."</td>
						<td>".$semrow['class4']."</td>
						<td>".$semrow['class5']."</td>
						<td>".$semrow['class6']."</td>
						<td>".$semrow['class7']."</td>
				
				
				</tr>";
				$i++;
	}
	echo $i;
	?>
	</table>