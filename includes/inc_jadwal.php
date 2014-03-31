<style type="text/css">
<!--
body {
	margin: 0 0 0 10px;
}
@font-face {
	font-family: 'Gotham-Medium';
	src: url('../fonts/Gotham-Medium.eot?');
	src: url('../fonts/Gotham-Medium.eot?#iefix') format('embedded-opentype'), 
		 url('../fonts/Gotham-Medium.svg') format('svg'),
	     url('../fonts/Gotham-Medium.svg#webfontGotham-Medium') format('svg'),
	     url('../fonts/Gotham-Medium.woff') format('woff'), 
	     url('../fonts/Gotham-Medium.ttf')  format('truetype');
		 font-weight: normal;
    	 font-style: normal;
}
.scroll {
    font-size: 12px;
	overflow: auto;
}
/*TABLE JADWAL*/
#jadwal {
	font-family: "Gotham-Medium", Arial, Helvetica, sans-serif;
	font-size: 12px;
	width: 100%;
	height: 100%;
	overflow: auto;
	-webkit-overflow-scrolling: touch;
}
-->
</style>

<?php

$host="localhost"; // Host name 
$username="tryme"; // Mysql username 
$password="hacked"; // Mysql password 
$db_name="antv2"; // Database name 
$tbl_name="schedule"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE date=CURRENT_DATE()";
$result=mysql_query($sql);

echo "<div id='jadwal'>";
// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
?>


<?php echo preg_replace("/\n/", "<br><br>", $rows['program']); ?>


<?
// close while loop 
}

echo "</div>";

// close connection 
mysql_close();
?>