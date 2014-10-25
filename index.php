<!DOCTYPE html>
<?php 
$db = mysql_connect("localhost","username","password"); 
if (!$db) {
die("Database connection failed miserably: " . mysql_error());
}
$db_select = mysql_select_db("SensorData.db",$db);
if (!$db_select) {
die("Database selection also failed miserably: " . mysql_error());
 }
 ?>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <meta HTTP-EQUIV="REFRESH" content="2; url=http://www.mipe.dk" /> -->  	
<title>Redirect</title>
</head>
<body>
<p>Now index.html file on github</p>
 <?php
                $query = "SELECT * FROM `mytable`;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_assoc($result)) {
                      // Display your datas on the page
                }
          ?>
</body>
</html>
