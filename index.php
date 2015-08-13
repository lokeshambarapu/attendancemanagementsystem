<?php 

$mysql_hostname="localhost";
$mysql_databasename="teacher";
$mysql_user="root";
$mysql_password="";
$connect=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$selected =mysql_select_db($mysql_databasename,$connect)  or die("Could not select database");
?>
<html>
<head>
<style>
#table td{
		text-align: center;
}
#table {
	border: 3px solid;
	border-color : blue;
    border-radius: 25px;
	margin-left:1%;
	margin-right:1%;
	text-decoration: none;
}

.tiles 
{
	
	//width: 300px;
	//height: 200px;	
	//border: 5;
	//background-color:green;
	//float:left;
	margin-left: 2%;
	margin-right: 2%;
	text-decoration: none;
}
.tiles1 
{
	//width: 35%;
	//height: 200px;
	//border: 5;
	//background-color:green;
	//float:left;
	margin-left: 2%;
	margin-right: 2%;
	text-decoration: none;
}
.nspan {
font-weight: bold; font-size: 20px; line-height: 1000%;
}
#table span a {
	color:white;
}
#table span a:hover {
	color:#f90;
}
.subspan {
	font-weight: bold; font-size: 20px; line-height: 200%;
	//float:left;
	
}
.aleft {
	float:left;
	font-weight: plain; font-size: 15px;
	margin-left:10%;
}
/*================end tiles================= */

/*================table================= */
.box {
    position: relative;
    border-radius: 3px;
    background: none repeat scroll 0% 0% #FFF;
    border-top: 3px solid #D2D6DE;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1);
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}
* {
    box-sizing: border-box;
}

.box-body {
    border-radius: 0px 0px 3px 3px;
    padding: 10px;
}
* {
    box-sizing: border-box;
}
/*================table================= */
/*--menu--*/
.menu {
	border-bottom: 5px solid white;
}
.toggleMenu {
    display:  none;
    background: #666;
    padding: 10px 15px;
    width: 100%;
    color: #fff;
}
.top-nav{
	 background: #014279;
}
.nav {
    list-style: none;
     *zoom: 1;
    width:79%;
     float:left;
}
.nav:before,
.nav:after {
    content: " "; 
    display: table; 
}
.nav:after {
    clear: both;
}
.nav ul {
    list-style: none;
    width: 5em;
}
.nav a {
    color: white;
	font-size: 17px;	
}
.nav li.active> a, .nav li> a:hover {
	color:#FA6210; 
}
.nav li.active {
	background-color: white;
}

.nav li {
    position: relative;
   padding: 10px 20px;
   	font-family: 'Open Sans', sans-serif;
}
.nav > li {
    float: left;
}
.nav > li > a {
    display: block;
}
.nav li  ul {
    position: absolute;
    left: -9999px;
}
.nav > li.hover > ul {
    left: 0;
}
.nav li li.hover ul {
    left: 100%;
    top: 0;
    -webkit-transition: background .2s linear;
	-moz-transition: background .2s linear;
	-ms-transition: background .2s linear;
	-o-transition:  background .2s linear;
	transition: background .2s linear;
}
#textarea{
	//position: absolute;
	//top:200px;
	//left:80px;
    width:600px;
    height: 350px;
    background-color:white;
	border-radius:25px;
}
#pid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:200;
	height:30;
}
#thhead {
			white-space: nowrap; 
			//width: 12em; 
			overflow: hidden;
			text-overflow: ellipsis; 
			border: 2px solid cyan;
		}
.search{
	float:left;
	padding-top:0.2em;
}
.search input[type="text"] {
	outline: none;
	padding:5px 16px;
	outline: none;
	color: #fff;
	background:none;
	border: 1px solid #096DB9;
	width: 78.33%;
	line-height: 1.5em;
	font-size: 0.8125em;
}
.search input[type="submit"] {
	background: #FA6210 url('../images/search.png') no-repeat 9px 9px;
	padding: 6px 15px;
	border: none;
	cursor: pointer;
	width: 1.33%;
	position: absolute;
	line-height: 1.5em;
	outline: none;
}
.search input[type="submit"]:hover{
	background:#001C32 url('../images/search.png') no-repeat 9px 9px;
}

</style>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<form method="POST" action="index1.php">
<h4><font  size='5px'>Student Id<input type="text" id="studentid" name="studentid">
<input type="submit" name="submit">
</form>

<div id="table"> 
		<table style="width:100%" cellspacing=20>
			<tr>
				<td width="20%"><div style="background-color: #00d4d6;" class="tiles"><span class="nspan"><a href="index1.php">View Details</a></span></div></td>
				<td width="20%"><div style="background-color: #014d60" class="tiles"><span class="nspan"><a href="stud_view_marks.php">View Marks</a></span></div></td>
				<td width="30%"><div style="background-color: #337da5" "text-decoration: none" class="tiles1"><span class="nspan"><a href="#">View Timetable</a></span></div></td>
			</tr>
			<tr>
				<td width="20%" ><div style="background-color: #ff88a9" class="tiles"><span class="nspan"><a href="stud_view_remarks.php">Remarks</a></span></div></td>
				<td width="20%"><div style="background-color: #83ba3a" class="tiles"><span class="nspan"><a href="stud_give_feedback.php">Give Feedback</a></span></td>
				<td width="30%"><div style="background-color: #9e0e0e" class="tiles1"><span class="nspan"><a href="#">Notifications</a></span></div></td>
			</tr>
		</table>
</div>	
<div class="wrap">
	<div class="main">
			
	</div>
</div>
</body>
</html>