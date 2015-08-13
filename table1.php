<?php

$mysql_hostname="localhost";
$mysql_databasename="teacher";
$mysql_user="root";
$mysql_password="";
$connect=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$selected =mysql_select_db($mysql_databasename,$connect)  or die("Could not select database");

/*
$class=$_POST['year'];
echo $class;

$class1=$_POST['branch'];
echo $class1;

$class2=$_POST['section'];
echo $class2;
*/
?>

<form method="POST" action="table2.php">
<h4><font  size='5px'>Attendance on<input type="text" id="date" name="date2">
<table id="add_individual"  width="100%" class="imagetable" cellpadding="5" cellspacing="5" border="3" style="background-color:#E6E6FA;">
			<tr>
			<th>sno</th>
			<th>Student ID</th>
			<th>Student Name</th>
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
	$result=mysql_query("SELECT * FROM cse2");
	while($semrow=mysql_fetch_array($result))
	{
		echo "
		<tr>
				<td>".$semrow['sno']."</td>
				<td><input id='' type='text' name='sid[$i]' value=".$semrow['studentid']."></td>	
				<td>".$semrow['name']."</td>
				<td><textarea name='class1[$i]' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='5'/></textarea></td>
				<td><textarea name='class2[$i]' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='5'/></textarea></td>
				<td><textarea name='class3[$i]' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='5'/></textarea></td>
				<td><textarea name='class4[$i]' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='5'/></textarea></td>
				<td><textarea name='class5[$i]' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='5'/></textarea></td>
				<td><textarea name='class6[$i]' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='5'/></textarea></td>
				<td><textarea name='class7[$i]' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='5'/></textarea></td>	
				</tr>";
				$i++;
	}
	echo $i;
	?>
	</table>
	<input type="submit" value="submit">
		</form>
				
		
	<script type="text/javascript">
		var currenttime=new Date();
		var month=currenttime.getMonth()+1;
		var day=currenttime.getDate();
		var year=currenttime.getFullYear();
		document.getElementById("date").value=day + "-" + month +"-" + year;
	</script>